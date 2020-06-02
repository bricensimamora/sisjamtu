<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelkurikulum_model extends CI_Model
{
    private $_table = "tabel_5a"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}