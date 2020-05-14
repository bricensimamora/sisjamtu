<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['model_auth', 'model_token', 'pengguna_model']);
        $this->load->library('form_validation');

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

        $this->session->sudah_login();

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $login = $this->model_auth->login($email,$password);

            if ($login) {

                $data_pengguna = [
                    'data' => $login,
                    'is_login' => TRUE
                ];

                $this->session->set_userdata($data_pengguna);
                redirect('beranda', 'refresh');
                
            } else {
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

    public function token()
    {
        $this->form_validation->set_rules('token', 'Token', 'required');

        if ($this->form_validation->run() == TRUE) {
            $token = $this->input->post('token');
            $login = $this->model_token->get_by_token($token);

            if ($login) {
                $user = $this->pengguna_model->get($login['idUsers']);

                $data_pengguna = [
                    "data" => $user,
                    "is_login" => TRUE
                ];

                $this->session->set_userdata($data_pengguna);
                redirect('kuesioner', 'refresh');

            } else {
                $this->data['errors'] = "token tidak ada";
                $this->load->view('auth/token_view', $this->data);
            }

        } else {
            $this->load->view('auth/token_view');
        }
        
    }
}