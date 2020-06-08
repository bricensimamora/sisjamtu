<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->session->has_admin();
        $this->load->library(['form_validation','services/pengguna_service']);
    }

    public function index()
    {
        $this->load->model('pengguna_model');
        $data["users"] = $this->pengguna_model->get_all();
        $data["active"] = "pengguna";
        $this->render_template('admin/pengguna_view', $data);
    }

    public function tambah()
    {
        $data["active"] = "pengguna";

        $this->form_validation->set_message('required', '{field} tidak boleh kosong');
        $this->form_validation->set_rules('inputNama', 'Nama Unit', 'required');
        $this->form_validation->set_rules('inputEmail', 'Alamat Email', 'required|valid_email', 
                    ['valid_email' => '{field} harus berisi email yang sah']);
        $this->form_validation->set_rules('inputRole', 'Peran', 'required');
        if ($this->input->post('submit')) {
            $role = $this->input->post('inputRole');
            $data["role"] = $role;
            if ($role == 1) {
                $this->form_validation->set_rules('inputPassword', 'Password', 'required');
                $this->form_validation->set_rules('inputKonfirmPassword', 'Konfirm Password', 'required|matches[inputPassword]',
                    ['matches' => '{field} tidak sesuai dengan {param}']);
            }
        }
        

        if ($this->form_validation->run() == TRUE)
        {
            $nama = $this->input->post('inputNama');
            $email = $this->input->post('inputEmail');
            if ($role == 1) {
                $password = $this->input->post('inputPassword');
            } else {
                $password = "NOp9vtYGmA33rx1FS87IGvfCvitRx";
            }
            if ($nama && $email && $role && $password)
            {
                if ($role == "1") {
                    $this->pengguna_service->createPengamat([
                        'nama' => $nama,
                        'email' => $email,
                        'password' => $password
                    ]);
                }elseif ($role == "2")
                {
                    $this->pengguna_service->createToken([
                        'nama' => $nama,
                        'email' => $email,
                        'password' => $password
                    ]);
                }
                redirect('admin/pengguna', 'refresh');
            } else
            {
                echo "input salah";
            }
            
        }else{
            
            $this->render_template('admin/pengguna_form_view', $data);
        }
    }

    public function edit($id)
    {
        $pengguna = $this->pengguna_service->get_by_id($id);
        if ($pengguna["role"] <= 2) {
            if (!$this->session->is_superadmin()) {
                redirect('admin/pengguna', 'refresh');
            }
        }

        $this->form_validation->set_message('required', '{field} tidak boleh kosong');
        $this->form_validation->set_rules('inputNama', 'Nama Unit', 'required');
        $this->form_validation->set_rules('inputEmail', 'Alamat Email', 'required|valid_email', 
                    ['valid_email' => '{field} harus berisi email yang sah']);
        $this->form_validation->set_rules('inputRole', 'Peran', 'required');

        if ($this->input->post('submit')) {
            $role = $this->input->post('inputRole');
            $data["role"] = $role;
            if ($role == 1) {
                $this->form_validation->set_rules('inputPassword', 'Password', 'required');
                $this->form_validation->set_rules('inputKonfirmPassword', 'Konfirm Password', 'required|matches[inputPassword]',
                    ['matches' => '{field} tidak sesuai dengan {param}']);
            }
        }

        if ($this->form_validation->run() == TRUE) {
            if($this->input->post())
            {
                $user_data = [
                    'email' => $this->input->post('inputEmail'),
                    'fullName' => $this->input->post('inputNama'),
                    'password' => $this->input->post('inputPassword')
                ];
                if($role == 1)
                {
                    $this->pengguna_service->save_pengamat($id, $user_data);
                }else {
                    $this->pengguna_service->save_token($id, $user_data);
                }
                redirect('admin/pengguna', 'refresh');
            }
            $data['pengguna'] = $user_data;
            
        } else {
            $data['pengguna'] = $pengguna;
            $data["active"] = "pengguna";
            $this->render_template('admin/pengguna_form_view', $data);
        }
        
    }

    public function delete($id)
    {
        $user_data = $this->pengguna_service->get_by_id($id);
        if ($user_data["role"] <= 2) {
            if ($this->session->is_superadmin()) {
                redirect('admin/pengguna', 'refresh');
            }
        }

        if ($id) {
            if ($this->input->post('hapus')) {
                $this->pengguna_service->hapus($id);
            } else {
                $this->render_template('admin/pengguna_delete_view');
            }
            
        }        
    }

    private function render_template($page = null, $data = [])
    {
        $this->load->view("admin/header", $data);
        $this->load->view("admin/admin_navbar", $data);
        // $this->load->view("admin/sidebar", $data);
        $this->load->view($page, $data);
        $this->load->view("admin/footer", $data);
    }
}