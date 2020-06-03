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

    public function get_by_id($id)
    {
        return $this->CI->pengguna_model->get($id);
    }

    public function hapus($id)
    {
        $this->CI->load->model('model_token');
        $delete_token = $this->CI->model_token->delete_by_user_id($id);
        $delete = $this->CI->pengguna_model->delete($id);
        if($delete == TRUE)
        {
            $this->CI->session->set_flashdata('success', 'Berhasil menghapus data');
            redirect('admin/pengguna/', 'refresh');
        }else{
            $this->CI->session->set_flashdata('error', 'Terjadi kesalahan');
            redirect('admin/pengguna/delete/'.$id, 'refresh');
        }
    }

    public function save_pengamat($id, $data)
    {
        $user_data = [
            'email' => $data['email'],
            'fullName' => $data['fullName'],
            'role' => 3,
            'status' => 0,
            'password' => $this->CI->model_auth->makeHash($data['password'])
        ];

        return $this->CI->pengguna_model->update($id, $user_data);
    }

    public function save_token($id, $data)
    {
        $user_data = [
            'email' => $data['email'],
            'fullName' => $data['fullName'],
            'password' => $this->CI->model_auth->makeHash($data['password']),
            'role' => 4,
            'status' => 1
        ];

        return $this->CI->pengguna_model->update($id, $user_data);
    }
}