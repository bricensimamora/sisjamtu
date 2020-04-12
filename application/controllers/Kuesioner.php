<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data["active"] = "dashboard";
        $this->load->view('kuesioner/kuesioner_header');
        $this->load->view('kuesioner/kuesioner_sidebar', $data);
        $this->load->view('kuesioner/kuesioner_main');
        $this->load->view('kuesioner/kuesioner_footer');
    }

}