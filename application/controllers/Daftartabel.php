<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftartabel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Programstudi_model");
        $this->load->library('form_validation');
    }

    public function programstudi()
    {
        $this->load->view('layout/header');
        $data["program_studi"] = $this->Programstudi_model->getAll();
        $this->load->view('layout/daftar');
        $this->load->view('tabel/programstudi', $data);
        $this->load->view('layout/footer');
    }
}