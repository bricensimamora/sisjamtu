<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->session->has_admin();
    }

    public function index()
    {
        $this->load->model('model_token');
        $this->load->model('model_auth');
        $data["jumlah_token"] = $this->model_token->jumlah_token();
        $data["jumlah_pengguna"] = $this->model_auth->jumlah_pengguna();
        $data["active"] = "dashboard";
        $this->load->view("admin/header");
        $this->load->view("admin/admin_navbar");
        // $this->load->view("admin/sidebar", $data);
        $this->load->view("admin/dashboard_view",$data);
        $this->load->view("admin/footer");
    }

    public function yoo()
    {
        $expDate = "2020-06-06";
        $now = date('Y-m-d');
        // echo $expDate;
        if ($now < $expDate) {
            echo "tidak exp.";
        }else {
            echo "exp.";
        }
    }
}