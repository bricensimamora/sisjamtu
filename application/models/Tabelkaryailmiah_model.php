<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelkaryailmiah_model extends CI_Model
{
    private $_table = "tabel_3b6"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}