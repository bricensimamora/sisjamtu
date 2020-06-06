<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelreff_model extends CI_Model
{
    private $_table = "tabelreff_8e2"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}