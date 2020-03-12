<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelkerjasamapendidikan_model extends CI_Model
{
    private $_table = "tabel_1_1"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}