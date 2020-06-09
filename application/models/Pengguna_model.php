<?php

class Pengguna_model extends CI_Model
{
    private $nama_tabel = "users";

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Mendapatkan semua pengguna dari VIEW
     * @return Array
     */
    public function get_all()
    {
        return $this->db->get('display_users')->result_array();
    }

    /**
     * Mendapatkan pengguna berdasarkan $id
     * @param String $id. ID dari pengguna (AI)
     * @return Array
     */
    public function get($id)
    {
        return $this->db->get_where($this->nama_tabel, ['id' => $id])->row_array();
    }

    /**
     * Mendapatkan semua pengguna unit (role == 4)
     * @return Array
     */
    public function get_unit_list()
    {
        return $this->db->get_where($this->nama_tabel, ['role'=>4])->result_array();
    }

    /**
     * Memasukkan data ke table users
     */
    public function create($data)
    {
        return $this->db->insert($this->nama_tabel, $data);
    }

    /**
     * Mengubah data users berdasarkan ID
     * @param String $id. ID users (AI)
     */
    public function update($id, $data)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update($this->nama_tabel);
    }

    /**
     * Menghapus data users berdasarkan ID
     * @param String $id. ID users (AI)
     */
    public function delete($id)
    {
        return $this->db->delete($this->nama_tabel, array('id' => $id));
    }
}