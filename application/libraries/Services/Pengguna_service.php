<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_service
{
    private $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model(['pengguna_model', 'model_auth']);
    }

    public function createToken($data)
    {
        $user_data = [
            'email' => $data['email'],
            'fullName' => $data['nama'],
            'password' => $this->CI->model_auth->makeHash($data['password']),
            'role' => 4,
            'status' => 1
        ];

        return $this->CI->pengguna_model->create($user_data);
    }

    public function createPengamat($data)
    {
        $user_data = [
            'email' => $data['email'],
            'fullName' => $data['nama'],
            'password' => $this->CI->model_auth->makeHash($data['password']),
            'role' => 3,
            'status' => 0
        ];

        return $this->CI->pengguna_model->create($user_data);
    }
}