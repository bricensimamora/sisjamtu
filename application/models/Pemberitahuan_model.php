<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pemberitahuan_model extends CI_Model
{
    private $_table = "pemberitahuan"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function hapus($id)
    {
        $hasil = $this->db->query("DELETE FROM pemberitahuan WHERE id='$id'");
        return $hasil;
    }
}