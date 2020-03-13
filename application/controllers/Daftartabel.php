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

    public function seleksimhs()
    {
        $this->load->model("Tabelseleksi_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["seleksimhs"] = $this->Tabelseleksi_model->getAll();
        $this->load->view('tabel/seleksimhs', $data);
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

    public function kerjasamapendidikan()
    {
        $this->load->model("Tabelkerjasamapendidikan_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["kerjasama"] = $this->Tabelkerjasamapendidikan_model->getAll();
        $this->load->view('tabel/kerjasamapendidikan', $data);
        $this->load->view('layout/footer');
    }

    public function kerjasamapenelitian()
    {
        $this->load->model("Tabelkerjasamapenelitian_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["penelitian"] = $this->Tabelkerjasamapenelitian_model->getAll();
        $this->load->view('tabel/kerjasamapenelitian', $data);
        $this->load->view('layout/footer');
    }

    public function kerjasamapengabdian()
    {
        $this->load->model("Tabelkerjasamapengabdian_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["pengabdian"] = $this->Tabelkerjasamapengabdian_model->getAll();
        $this->load->view('tabel/kerjasamapengabdian', $data);
        $this->load->view('layout/footer');
    }

    public function dosentetap()
    {
        $this->load->model("Tabeldosentetap_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["dosen"] = $this->Tabeldosentetap_model->getAll();
        $this->load->view('tabel/dosentetap', $data);
        $this->load->view('layout/footer');
    }
}