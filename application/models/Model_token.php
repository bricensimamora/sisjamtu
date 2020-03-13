<?php

class Model_token extends CI_Model
{
    public function __contruct()
    {
        parent::__contruct();
    }

    /** Fungsi untuk mengambil semua record dari BD */
    public function getAll()
    {
        return $this->db->get('tokens');
    }

    /** Fungsi untuk mengambil satu record dari DB */
    public function get($id)
    {
        return $this->db->get_where('tokens', array('id' => $id));
    }

    /** Fungsi untuk membuat record token */
    public function create($data)
    {
        return $this->db->insert_string('tokens', $data);
    }

    /** Fungsi untuk mengubah record token */
    public function edit($id, $data)
    {
        return $this->db->update_string('tokens', $data, $id);
    }

    /** Fungsi untuk menghapus record token */
    public function delete($id)
    {
        return $this->db->delete('tokens', array('id' => $id));
    }

    /** Fungsi untuk membuat token */
    public function rand_token()
    {
        $this->load->helper('string');
        
        $this->load->model('model_auth');

        $token = random_string('alnum', 8);

        return [
            'token' => $token,
            'hash' => $this->model_auth->makeHash($token)
        ];

        // echo random_string('alnum', 16);
    }


}
