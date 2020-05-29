<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelluaranpenelitian2_model extends CI_Model
{
    private $_table = "tabel_3b5_2"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}