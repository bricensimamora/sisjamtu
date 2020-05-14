<?php

class Pengguna_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        return $this->db->get('display_users')->result_array();
    }

    public function get_unit_list()
    {
        return $this->db->get_where('users', ['role'=>4])->result_array();
    }
}