<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelpenelitiandgnsiswa_model extends CI_Model
{
    private $_table = "tabel_6a"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}