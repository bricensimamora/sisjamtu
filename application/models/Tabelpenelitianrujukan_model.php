<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelpenelitianrujukan_model extends CI_Model
{
    private $_table = "tabel_6b"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}