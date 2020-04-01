<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data["active"] = "dashboard";
        $this->load->view("admin/header");
        $this->load->view("admin/admin_navbar");
        $this->load->view("admin/sidebar", $data);
        $this->load->view("admin/dashboard_view");
        $this->load->view("admin/footer");
    }

    public function edit()
    {

    }

    public function delete()
    {
        
    }
}