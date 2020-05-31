<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabeldosenpembimbing_model extends CI_Model
{
    private $_table = "tabel_3a2"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }
}