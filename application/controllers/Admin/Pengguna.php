<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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

        $this->form_validation->set_rules('inputNama', 'Nama Unit', 'required');
        $this->form_validation->set_rules('inputEmail', 'Alamat Email', 'required');
        $this->form_validation->set_rules('inputRole', 'Peran', 'required');
        $this->form_validation->set_rules('inputPassword', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $nama = $this->input->post('inputNama');
            $email = $this->input->post('inputEmail');
            $role = $this->input->post('inputRole');
            $password = $this->input->post('inputPassword');
            if ($nama && $email && $role && $password) {
                if ($role == "1") {
                    $this->pengguna_service->createPengamat([
                        'nama' => $nama,
                        'email' => $email,
                        'password' => $password
                    ]);
                }elseif ($role == "2") {
                    $this->pengguna_service->createToken([
                        'nama' => $nama,
                        'email' => $email,
                        'password' => $password
                    ]);
                }
            } else {
                echo "input salah";
            }
            
        }
        
        $this->render_template('admin/pengguna_form_view', $data);
    }

    public function edit($id)
    {
        $user_data = $this->pengguna_service->get_by_id($id);

        $this->form_validation->set_rules('inputNama', 'Nama Unit', 'required');
        $this->form_validation->set_rules('inputEmail', 'Alamat Email', 'required');
        $this->form_validation->set_rules('inputRole', 'Peran', 'required');
        $this->form_validation->set_rules('inputPassword', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            if($this->input->post())
            {
                $user_data = [
                    'email' => $this->input->post('inputEmail'),
                    'fullName' => $this->input->post('inputNama'),
                    'role' => $this->input->post('inputRole'),
                    'password' => $this->input->post('inputPassword')
                ];
                $this->pengguna_service->save($id, $user_data);
                redirect('admin/pengguna', 'refresh');
            }
            $data['pengguna'] = $user_data;
            
        } else {
            $data['pengguna'] = $user_data;
        }
        $data["active"] = "pengguna";

        $this->render_template('admin/pengguna_form_view', $data);
        
    }

    public function delete($id)
    {
        $data['active'] = "pengguna";
        if ($id) {
            if ($this->input->post('hapus')) {
                $this->pengguna_service->hapus($id);
            } else {
                $this->render_template('admin/pengguna_delete_view', $data);
            }
            
        }        
    }

    private function render_template($page = null, $data = [])
    {
        $this->load->view("admin/header", $data);
        $this->load->view("admin/admin_navbar", $data);
        $this->load->view("admin/sidebar", $data);
        $this->load->view($page, $data);
        $this->load->view("admin/footer", $data);
    }
}