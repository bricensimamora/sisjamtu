<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelwaktutunggud4_model extends CI_Model
{
    private $_table = "tabel_8d1_2"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}