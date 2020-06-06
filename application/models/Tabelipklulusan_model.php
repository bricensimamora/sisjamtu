<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelipklulusan_model extends CI_Model
{
    private $_table = "tabel_8a"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}