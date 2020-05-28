<?php

class Tabels_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {}

    public function get_all()
    {
        // $this->db->select('kode');
        return $this->db->get('tabels')->result_array();
    }
}