<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelprestasiakademik_model extends CI_Model
{
    private $_table = "tabel_8b1"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}