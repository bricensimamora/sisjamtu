<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('pengguna_model');
        $data["users"] = $this->pengguna_model->get_all();
        $data["active"] = "pengguna";
        $this->load->view("admin/header");
        $this->load->view("admin/admin_navbar");
        $this->load->view("admin/sidebar", $data);
        $this->load->view("admin/pengguna_view", $data);
        $this->load->view("admin/footer");
    }

    public function edit()
    {

    }

    public function delete()
    {
        
    }
}