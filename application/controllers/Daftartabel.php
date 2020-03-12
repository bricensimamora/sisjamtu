<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftartabel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tabelps_model");
        $this->load->library('form_validation');
    }

    public function programstudi()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["program_studi"] = $this->Tabelps_model->getAll();
        $this->load->view('tabel/programstudi', $data);
        $this->load->view('layout/footer');
    }
    public function mahasiswaasing()
    {
        $this->load->model("Tabelmahasiswaasing_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["mahasiswaasing"] = $this->Tabelmahasiswaasing_model->getAll();
        $this->load->view('tabel/mahasiswaasing', $data);
        $this->load->view('layout/footer');
    }
}