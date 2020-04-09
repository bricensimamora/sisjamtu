<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelwaktumengajar_model extends CI_Model
{
    private $_table = "tabel_3a3"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}