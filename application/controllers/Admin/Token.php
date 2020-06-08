<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Token extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->session->has_admin();
        $this->load->model(['pengguna_model', 'tabels_model']);
        $this->load->library(['form_validation','token_services', 'services/pengguna_service']);
    }

    public function index()
    {
        $data['listUnit'] = $this->pengguna_model->get_unit_list();
        $data['listTabel'] = $this->tabels_model->get_tabel_kosong();
        $data['tokens'] = $this->token_services->get();
        $data["active"] = "token";

        $this->form_validation->set_rules('inputName', 'Nama Unit', 'required');
        $this->form_validation->set_rules('inputTabel[]', 'Nama Tabel', 'required');
        $this->form_validation->set_rules('inputKadaluarsa', 'Tanggal Kadaluarsa', 'required');

        if ($this->form_validation->run() == TRUE) {

            $id_unit = $this->input->post("inputName");
            $id_tabel = $this->input->post("inputTabel[]");
            $tanggal_kadaluarsa = $this->input->post("inputKadaluarsa");

            if ($id_unit && $id_tabel && $tanggal_kadaluarsa) {
                $input = $this->token_services->input($id_unit, $id_tabel, $tanggal_kadaluarsa);
                if (count($input) == count($id_tabel)) {
                    redirect("admin/token", "refresh");
                } else {
                    $data['gagal'] = "Terdapat tabel yang tidak dapat dipilih.";
                    $this->render_template('admin/gagal_view', $data);
                }
                
            } else {

                redirect('beranda', 'refresh');

            } 

        }else {
            $this->render_template('admin/token_view', $data);
        }

        
    }

    public function refresh($id = NULL)
    {
        if($id == NULL){ redirect('admin/token', 'refresh');}

        $token = $this->token_services->get_token($id);

        if ($token['status'] != 3) {
            $refresh = $this->token_services->refresh_token($id);
            if($refresh == true)
            {
                $data['token'] = $token;
                $data['pesan_sukses'] = "Token sudah berhasil diperbarui dan terkirim ke email pengguna. Tolong tunggu 10 menit untuk menggunakan fitur ini pada pengguna yang sama.";
                $this->render_template('admin/token_berhasil_refresh', $data);
            }else{
                $data['gagal'] = "Gagal mengirim email. ".$refresh['error'];
                $this->render_template('admin/token_gagal_refresh', $data);
            }
        }else {
            $data['gagal'] = "Pengguna token sudah melakukan submit";
            $this->render_template('admin/token_gagal_refresh', $data);
        }
    }

    public function resend($id = NULL)
    {
        if($id == NULL){ redirect('admin/token', 'refresh');}

        $resend = $this->token_services->resend($id);

        if ($resend == true) {
            $data['pesan_sukses'] = "Pesan berhasil dikirim ulang ke email pengguna. Tolong tunggu 10 menit untuk menggunakan fitur ini pada pengguna yang sama.";
            $this->render_template('admin/token_berhasil_refresh', $data);
        } else {
            $data['gagal'] = "Gagal mengirim email. ".$resend['error'];
            $this->render_template('admin/token_gagal_refresh', $data);
        }
        
        
    }

    private function render_template($page = null, $data = [])
    {
        $this->load->view('admin/header', $data);
        $this->load->view('admin/admin_navbar', $data);
        $this->load->view($page, $data);
        $this->load->view('admin/footer', $data);
    }

    public function view()
    {
        // $data = [
        //     'nama' => 'baak',
        //     'tabels' => $this->tabels_model->get_kosong_edit(23)->result_array(),
        //     'tanggal' => '2020-06-09'
        // ];
        // // var_dump($data['token']);
        // // $this->render_template('admin/token_edit', $data);
        // $tabels = [];
        // foreach ($this->tabels_model->get_id_kosong_edit(23)->result_array() as $key => $value) {
        //     $tabels[] = $value['id'];
        // }
        // $tabels = ;
        $ids_tabel = $this->token_services->get_values($this->tabels_model->get_tabel_kosong(), 'id');


        var_dump($ids_tabel);
    }

    public function edit($id)
    {
        $token = $this->token_services->get($id)[0];

        if ($token["status"] != 'created') {
            redirect('admin/token', 'refresh');
        }

        $data = [
            'nama' => $token["name"],
            'tabels' => $this->tabels_model->get_kosong_edit($id)->result_array(),
            'tanggal' => $token["expDate"]
        ];
        // var_dump($data);
        // $this->render_template('admin/token_edit', $data);
        $this->form_validation->set_rules('inputTabel[]', 'Nama Tabel', 'required');
        $this->form_validation->set_rules('inputKadaluarsa', 'Tanggal Kadaluarsa', 'required');

        if ($this->form_validation->run() == true) {
            $selected_tabels = $this->input->post("inputTabel[]");
            $unselected_tabels = json_decode($this->input->post("inputHidden"));
            $tanggal_kadaluarsa = $this->input->post("inputKadaluarsa");

            $update = $this->token_services->update($id, $selected_tabels, $unselected_tabels, $tanggal_kadaluarsa);
            // redirect("admin/token", "refresh");
            if (in_array(true, $update)) {
                if (in_array(false, $update)) {
                    //berhasil sebagian
                    $data['pesan_sukses'] = "Berhasil dilakukan update sebagian. Cek kembali tabel.";
                    $this->render_template('admin/token_berhasil_refresh', $data);
                } else {
                    //berhasil semua
                    $data['pesan_sukses'] = "Berhasil melakukan update.";
                    $this->render_template('admin/token_berhasil_refresh', $data);
                }
            } else {
                //gagal
                $data['gagal'] = "saat melakukan update tabel. Tabel sudah digunakan.";
            }
        } else {
            $this->render_template('admin/token_edit', $data);
        }
        
    }

    public function delete($id = NULL)
    {
        if ($id == null) {
            redirect('admin/token', 'refresh');
        }

        $user_data = $this->pengguna_service->get_by_id($this->token_services->get_token($id)['idUsers']);

        if (!$user_data) {
            redirect('admin/token', 'refresh');
        }

        // var_dump($user_data);
        if ($user_data['role'] <= 2) {
            if ($this->session->is_superadmin()) {
                redirect('admin/token', 'refresh');
            }
        }

        if ($this->input->post('hapus')) {
            
            $hapus = $this->token_services->hapus($id);

            if (in_array(true, $hapus)) {
                if (in_array(false, $hapus)) {
                    // echo "berhasil sebagian";
                    // var_dump($hapus);
                    $data['pesan_sukses'] = "Data berhasil dihapus sebagian. Silakan hubungi Developer.";
                    $this->render_template('admin/token_berhasil_refresh', $data);
                } else {
                    // echo "berhasil semua";
                    // var_dump($hapus);
                    $data['pesan_sukses'] = "Data berhasil dihapus.";
                    $this->render_template('admin/token_berhasil_refresh', $data);
                }
                
            } else {
                // echo "gagal hapus";
                // var_dump($hapus);
                $data['gagal'] = "karena tidak ada data. Silakan hubungi Developer.";
                $this->render_template('admin/token_gagal_refresh', $data);
            }
        } else {
            $data['nama'] = $user_data['fullName'];
            $this->render_template('admin/token_delete', $data);
        }
    }

}