<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['model_auth', 'model_token', 'pengguna_model']);
        $this->load->library('form_validation');

    }

    public function login()
    {
        /**
         * TODO: Nanti tambahin Session
         * to: Alfian
         */

        if ($this->session->userdata('is_login')) {
            redirect('beranda', 'refresh');
        }

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $login = $this->model_auth->login($email,$password);

            if ($login) {

                if ($login['status'] == 1) {

                    $data_pengguna = [
                        'data' => $login,
                        'is_login' => TRUE
                    ];
    
                    $this->session->set_userdata($data_pengguna);
                    if ($this->session->has_userdata('redirect')) {
                        redirect($this->session->userdata('redirect'), 'refresh');
                    } else {
                        redirect('beranda', 'refresh');
                    }
                }else {
                    $data_pengguna = [
                        'data' => $login,
                        'repass' => true
                    ];
                    $this->session->set_userdata($data_pengguna);
                    redirect('auth/new_user', 'refresh');
                }
                
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
        if ($this->session->userdata('is_login')) {
            redirect('beranda', 'refresh');
        }

        $this->form_validation->set_rules('token', 'Token', 'required');

        if ($this->form_validation->run() == TRUE) {
            $token = $this->input->post('token');
            $login = $this->model_token->get_by_token($token);

            if ($login) {

                //checking
                $now = date('Y-m-d');
                if ($login[0]['expDate'] < $now) {
                    $data['pesan'] = "Kode yang dimasukkan sudah kadaluarsa. Silakan hubungi kami jika terjadi kesalahan.";
                    $this->load->view('auth/gagal_view', $data);
                    return;
                }

                if ($login[0]['status'] == 3) {
                    $data['pesan'] = "Anda sudah melakukan submit. Silakan hubungi kami jika terjadi kesalahan.";
                    $this->load->view('auth/gagal_view', $data);
                    return;
                }

                $user = $this->pengguna_model->get($login[0]['idUsers']);

                $data_pengguna = [
                    "data" => $user,
                    "token" => $login,
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

    public function new_user()
    {
        if ($this->session->userdata('is_login')) {
            redirect('beranda', 'refresh');
        }
        if (!$this->session->userdata('repass')) {
            redirect('beranda', 'refresh');
        }

        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('konfirmPassword', 'Konfirm Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $pass = $this->input->post('password');
            $konfirm = $this->input->post('konfirmPassword');

            if ($pass == $konfirm) {
                // masukkan new pass ke db
                $id_user = $this->session->userdata('data')['id'];
                $data = [
                    'password' => $this->model_auth->makeHash($pass),
                    'status' => 1
                ];
                $update = $this->pengguna_model->update($id_user, $data);
                // buat is_login true
                if ($update) {
                    $data_pengguna['is_login'] = TRUE;
                    $data_pengguna['repass'] = FALSE;
                    $this->session->set_userdata($data_pengguna);
                    redirect('beranda', 'refresh');

                } else {
                    $this->data['errors'] = "terjadi kegagalan merubah password";
                    // $this->load->view('auth/login_view', $this->data);
                    var_dump($this->data);
                    var_dump($update);

                }
            }else {
                echo "pass tidak sama konfirm";
                var_dump($pass);
                var_dump($konfirm);
                // $this->load->view('auth/repass_view');
            }
        } else {
            $this->load->view('auth/repass_view');
        }
        

    }
}