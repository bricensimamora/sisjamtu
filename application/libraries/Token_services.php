<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Token_services  
{
    private $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model(['model_token', 'tabels_model', 'pengisi_model']);
        $this->CI->load->library('services/email_service');
    }

    private function status_to_string($tokens)
    {
        $hasil = $tokens;

        foreach ($tokens as $key => $value) {
            if ($value["status"] === "1")
            {
                $hasil[$key]["status"] = "created";
            }
            elseif ($value["status"] === "2")
            {
                $hasil[$key]["status"] = "in progress";
            }
            elseif ($value["status"] === "3")
            {
                $hasil[$key]["status"] = "submited";
            }
        }
        return $hasil;
    }

    public function get($id = null)
    {
        if($id == null)
        {
            return $this->status_to_string($this->CI->model_token->getAll());
        }else
        {
            return $this->status_to_string($this->CI->model_token->get($id));
        }
    }

    public function input($id_unit, $ids_tabel, $tanggal_kadaluarsa)
    {
        //Start transaction
        $this->CI->db->trans_start();

        //define data untuk tabel token di DB
        $data = [
            "idUsers" => $id_unit,
            "token" => $this->get_new_token(),
            "expDate" => date('Y-m-d',strtotime($tanggal_kadaluarsa)),
            "status" => 1,
            "tabels" => $this->arr_to_string($ids_tabel)
        ];

        //insert dan dapatkan id tokennya
        $this->CI->model_token->create($data);
        $id_token = ["id_token" => $this->CI->db->insert_id()];
        // var_dump($id_token);

        //dapatkan daftar tabel yang saat ini kosong
        $ids_tabel_kosong = $this->get_values($this->CI->tabels_model->get_tabel_kosong(), 'id');
        $insert_tabel = [];

        //insert jika tabel yang diminta ada di daftar tabel kosong
        foreach ($ids_tabel as $id_tabel) {
            if (in_array($id_tabel, $ids_tabel_kosong)) {
                $insert_tabel[] = $this->CI->tabels_model->update($id_tabel, $id_token);
            }
        }
        //jika tidak ada yang diinput delete token dan exit
        if (empty($insert_tabel)) {
            $this->CI->model_token->delete($id_token);
            $this->CI->db->trans_complete();
            return $insert_tabel;
        }
        //buat pengisi dan kirim email
        $this->CI->pengisi_model->create(['id_token' => $id_token["id_token"]]);
        $this->resend($id_token["id_token"]);
        //end transaction dan return insert_tabel
        $this->CI->db->trans_complete();
        return $insert_tabel;
    }

    public function refresh_token($id_token)
    {
        $token = $this->CI->model_token->get($id_token)[0];
        $data = ["token" => $this->get_new_token()];
        $email = $token["email"];
        $body = [
            'nama' => $token['name'],
            'kode_token' => $data['token']
        ];
        // var_dump($body);
        $send =$this->CI->email_service->register_token($email, $body);
        if($send != true){
            return $send;
        }else{
            $this->CI->model_token->edit($id_token, $data);
            return true;
        }
        
    }

    private function get_new_token()
    {
        $this->CI->load->helper('string');
        $token = strtolower(random_string('alnum', 8));
        while ( sizeof($this->CI->model_token->get_by_token($token)) > 0) {
            $token = strtolower(random_string('alnum', 8));
        }
        return $token;
    }

    private function arr_to_string($data)
    {
        return implode(", ", $data);
    }

    public function get_token($id)
    {
        return $this->CI->model_token->get_token($id)->row_array();
    }

    public function resend($id_token)
    {
        $token = $this->CI->model_token->get($id_token)[0];
        $email = $token["email"];

        $body = [
            'nama' => $token['name'],
            'kode_token' => $token['token']
        ];
        // var_dump($body);
        $send =$this->CI->email_service->register_token($email, $body);
        if($send != true){
            return $send;
        }else{
            return true;
        }
    }

    public function update($id, $selected_tabels, $unset_tabels, $tanggal_kadaluarsa)
    {
        $this->CI->db->trans_start();

        $data_update = [
            "expDate" => date('Y-m-d',strtotime($tanggal_kadaluarsa)),
            "tabels" => $this->arr_to_string($selected_tabels)
        ];

        $this->CI->model_token->edit($id, $data_update);

        $tabels = [];
        $insert_tabel = [];

        foreach ($this->CI->tabels_model->get_id_kosong_edit($id)->result_array() as $key => $value) {
            $tabels[] = $value['id'];
        }

        foreach ($selected_tabels as $tabel) {
            if (in_array($tabel, $tabels)) {
                $insert_tabel[] = $this->CI->tabels_model->update($tabel, ['id_token' => $id]);
            }
        }

        foreach ($unset_tabels as $tabel) {
            if (in_array($tabel, $tabels)) {
                $insert_tabel[] = $this->CI->tabels_model->update($tabel, ['id_token' => 0]);
            }
        }

        $this->CI->db->trans_complete();

        return $insert_tabel;
    }

    public function hapus($id_token)
    {
        //detele pengisi
        $insert_tabel = [];
        $insert_tabel[] = $this->CI->pengisi_model->delete_by_token($id_token);
        //ambil id_tabel ($tabel['id]) by id_token
        $tabels = $this->CI->tabels_model->get_by_token($id_token)->result_array();
        // var_dump($tabels);
        //set tabel to 0
        foreach ($tabels as $tabel) {
            $insert_tabel[] = $this->CI->tabels_model->update($tabel['id'], ['id_token' => 0]);
        }
        // //hapus token
        $insert_tabel[] = $this->CI->model_token->delete($id_token);
        return $insert_tabel;
    }

    /**
     * Mengembalikan array dari your_key dalam array of array
     */
    public function get_values($array, $your_key)
    {
        $values = [];
        foreach ($array as $key => $value) {
            $values[] = $value[$your_key];
        }
        return $values;
    }

}