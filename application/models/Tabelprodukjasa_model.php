<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelprodukjasa_model extends CI_Model
{
    private $_table = "tabel_3b7"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}