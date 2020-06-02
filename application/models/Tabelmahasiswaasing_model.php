<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelmahasiswaasing_model extends CI_Model
{
    private $_table = "tabel_2b"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }
}