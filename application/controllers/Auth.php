<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_auth');
        $this->load->library('form_validation');
        $this->load->library('session');

        if (!($this->session->userdata('is_login'))) {
            $data_pengguna = ['is_loggin' => FALSE];
            $this->session->set_userdata($data_pengguna);
        }
    }

    public function login()
    {
        /**
         * TODO: Nanti tambahin Session
         * to: Alfian
         */

        $data_pengguna = $this->session->userdata();
		if($data_pengguna['is_loggin'] == TRUE) {
			redirect('beranda', 'refresh');
		}

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $login = $this->model_auth->login($email,$password);
            if ($login) {
                # berhasil login
                // echo "berhasil login";

                $data_pengguna = [
                    'email' => $login['email'],
                    'is_login' => TRUE
                ];

                $this->session->set_userdata($data_pengguna);
                // $this->session->sess_destroy();
                redirect('beranda', 'refresh');
                
            } else {
                # gagal login
                // echo "gagal login";
                $this->data['errors'] = "email/password salah";
                $this->load->view('auth/login_view', $this->data);
            }
        } else {
            $this->load->view('auth/login_view');
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
        $this->load->view('auth/regis_view');
    }

    public function view()
    {
        $this->load->view('auth/token_view');
    }
}