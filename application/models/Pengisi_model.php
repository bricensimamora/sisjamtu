<?php

class Pengisi_model extends CI_Model
{

    /**
     * Ini adalah nama tabel untuk tabel token, lihat di database.
     */
    private $_tabel = "pengisi";

    public function __contruct()
    {
        parent::__contruct();
    }

    public function create($data)
    {
        return $this->db->insert($this->_tabel, $data);
    }

    public function get_by_token($id_token)
    {
        return $this->db->get_where($this->_tabel, array('id_token' => $id_token));
    }

    public function update_by_token($id_token, $data)
    {
        $this->db->set($data);
        $this->db->where('id_token', $id_token);
        return $this->db->update($this->_tabel);
    }

    public function delete_by_token($id_token)
    {
        return $this->db->delete($this->_tabel, ['id_token' => $id_token]);
    }

}