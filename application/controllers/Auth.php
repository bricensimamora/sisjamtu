<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_auth');
        $this->load->library('form_validation');
    }

    public function login()
    {
        /**
         * TODO: Nanti tambahin Session
         * to: Alfian
         */

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if ($this->model_auth->login($email,$password)) {
                # berhasil login
                // echo "berhasil login";
                redirect('welcome', 'refresh');
            } else {
                # gagal login
                // echo "gagal login";
                redirect('auth/login', 'refresh');
            }
        } else {
            $this->load->view('auth_view');
        }     
    }

    public function logout()
    {
        $this->session->sess_destroy();
		redirect('auth/login', 'refresh');
    }

    public function regis()
    {
        $nama = $this->input->post("nama");
        $email = $this->input->post("email");
        $hash_password = $this->model_auth->makeHash($this->input->post("password"));

        $this->load->helper('array');
        echo $nama."</br>".$email."</br>".$hash_password;

    }

    public function daftar()
    {
        $this->load->view('regis_view');
    }
}