<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelpenelitianmahasiswa4_model extends CI_Model
{
    private $_table = "tabel_8f4_4"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}