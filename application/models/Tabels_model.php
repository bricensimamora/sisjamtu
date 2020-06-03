<?php

class Tabels_model extends CI_Model
{
    private $_table = "tabels";

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {}

    public function get_all()
    {
        // $this->db->select('kode');
        return $this->db->get($this->_table)->result_array();
    }

    public function get_kosong_id($id_token)
    {
        return $this->db->get_where($this->_table, ['id_token'=>$id_token,'filled'=>0]);
    }

    public function get_terisi_id($id_token)
    {
        return $this->db->get_where($this->_table, ['id_token'=>$id_token,'filled'=>1]);
    }

    public function update($id_tabel, $data)
    {
        $this->db->where(['id' => $id_tabel]);
        return $this->db->update($this->_table, $data);
    }

    public function get_tabel_kosong()
    {
        return $this->db->get_where($this->_table, ['id_token' => 0])->result_array();
    }
}