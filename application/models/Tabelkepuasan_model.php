<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelkepuasan_model extends CI_Model
{
    private $_table = "tabel_5c"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}