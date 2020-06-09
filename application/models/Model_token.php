<?php

class Model_token extends CI_Model
{

    /**
     * Ini adalah nama tabel untuk tabel token, lihat di database.
     */
    private $nama_tabel = "tokens";

    public function __contruct()
    {
        parent::__contruct();
    }

    /** 
     * Fungsi untuk mengambil semua record dari BD 
     * @return Array $Array.Result
    */
    public function getAll()
    {
        return $this->db->get('display_tokens')->result_array();
    }

    /** 
     * Fungsi untuk mengambil satu record dari DB 
     * @return Array $Array.Result
    */
    public function get($id)
    {
        return $this->db->get_where('display_tokens', array('id' => $id))->result_array();
    }

    /** 
     * Fungsi untuk mengembalikan nilai jumlah token yang ada 
     * @return Number $jumlah_row
     * */
    public function jumlah_token()
    {
        return $this->db->get($this->nama_tabel)->num_rows();
    }

    /** 
     * Fungsi untuk membuat record token 
     * @param Array $data . Data yang akan dimasukkan.
     * @return Boolean . TRUE jika berhasil di masukkan, FALSE sebaliknya
     * */
    public function create($data)
    {
        return $this->db->insert($this->nama_tabel, $data);
    }

    /** Fungsi untuk mengubah record token */
    public function edit($id, $data)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update($this->nama_tabel);
    }

    /** Fungsi untuk menghapus record token */
    public function delete($id)
    {
        return $this->db->delete('tokens', array('id' => $id));
    }

    public function delete_by_user_id($user_id)
    {
        return $this->db->delete('tokens', ['idUsers' => $user_id]);
    }

    /** Fungsi untuk membuat token */
    public function rand_token()
    {
        $this->load->helper('string');
        
        $this->load->model('model_auth');

        $token = random_string('alnum', 8);

        return [
            'token' => $token,
            'hash' => $this->model_auth->makeHash($token)
        ];

        // echo random_string('alnum', 16);
    }

    /**
     * Mengambil token berdasarkan token yang dimasukkan
     */
    public function get_by_token($token)
    {
        return $this->db->get_where('tokens', ["token" => $token])->result_array();
    }

    public function get_token($id)
    {
        return $this->db->get_where($this->nama_tabel, ['id' => $id]);
    }
}
