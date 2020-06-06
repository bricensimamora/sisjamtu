<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelpenggunaandana_model extends CI_Model
{
    private $_table = "tabel_4"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}