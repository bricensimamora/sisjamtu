<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelseleksi_model extends CI_Model
{
    private $_table = "tabel_2a"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }
}