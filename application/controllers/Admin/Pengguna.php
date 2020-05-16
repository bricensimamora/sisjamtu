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
        $this->load->view("admin/header");
        $this->load->view("admin/admin_navbar");
        $this->load->view("admin/sidebar", $data);
        $this->load->view("admin/pengguna_view", $data);
        $this->load->view("admin/footer");
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
        
        $this->load->view("admin/header");
        $this->load->view("admin/admin_navbar");
        $this->load->view("admin/sidebar", $data);
        $this->load->view("admin/tambah_pengguna_view");
        $this->load->view("admin/footer");
    }

    public function edit()
    {

    }

    public function delete()
    {
        
    }
}