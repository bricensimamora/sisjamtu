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

    public function dosenpembimbing()
    {
        $this->load->model("Tabeldosenpembimbing_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["pembimbing"] = $this->Tabeldosenpembimbing_model->getAll();
        $this->load->view('tabel/dosenpembimbing', $data);
        $this->load->view('layout/footer');
    }

    public function waktumengajar()
    {
        $this->load->model("Tabelwaktumengajar_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["waktumengajar"] = $this->Tabelwaktumengajar_model->getAll();
        $this->load->view('tabel/waktumengajar', $data);
        $this->load->view('layout/footer');
    }

    public function dosentidaktetap()
    {
        $this->load->model("Tabeldosentidaktetap_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["dosentidaktetap"] = $this->Tabeldosentidaktetap_model->getAll();
        $this->load->view('tabel/dosentidaktetap', $data);
        $this->load->view('layout/footer');
    }

    public function industripraktisi()
    {
        $this->load->model("Tabelindustripraktisi_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["industripraktisi"] = $this->Tabelindustripraktisi_model->getAll();
        $this->load->view('tabel/industripraktisi', $data);
        $this->load->view('layout/footer');
    }

    public function pengakuanrekognisi()
    {
        $this->load->model("Tabelpengakuanrekognisi_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["pengakuanrekognisi"] = $this->Tabelpengakuanrekognisi_model->getAll();
        $this->load->view('tabel/pengakuanrekognisi', $data);
        $this->load->view('layout/footer');
    }

    public function penelitiandtps()
    {
        $this->load->model("Tabelpenelitiandtps_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["penelitiandtps"] = $this->Tabelpenelitiandtps_model->getAll();
        $this->load->view('tabel/penelitiandtps', $data);
        $this->load->view('layout/footer');
    }

    public function pkmdtps()
    {
        $this->load->model("Tabelpkmdtps_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["pkmdtps"] = $this->Tabelpkmdtps_model->getAll();
        $this->load->view('tabel/pkmdtps', $data);
        $this->load->view('layout/footer');
    }

    public function publikasiilmiah()
    {
        $this->load->model("Tabelpublikasiilmiah_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["publikasiilmiah"] = $this->Tabelpublikasiilmiah_model->getAll();
        $this->load->view('tabel/publikasiilmiah', $data);
        $this->load->view('layout/footer');
    }

    public function p4ilmiah()
    {
        $this->load->model("Tabelp4ilmiah_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["p4ilmiah"] = $this->Tabelp4ilmiah_model->getAll();
        $this->load->view('tabel/p4ilmiah', $data);
        $this->load->view('layout/footer');
    }

    public function luaranpenelitian()
    {
        $this->load->model("Tabelluaranpenelitian_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["luaranpenelitian"] = $this->Tabelluaranpenelitian_model->getAll();
        $this->load->view('tabel/luaranpenelitian', $data);
        $this->load->view('layout/footer');
    }

    public function luaranpenelitian2()
    {
        $this->load->model("Tabelluaranpenelitian2_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["luaranpenelitian2"] = $this->Tabelluaranpenelitian2_model->getAll();
        $this->load->view('tabel/luaranpenelitian2', $data);
        $this->load->view('layout/footer');
    }

    public function luaranpenelitian3()
    {
        $this->load->model("Tabelluaranpenelitian3_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["luaranpenelitian3"] = $this->Tabelluaranpenelitian3_model->getAll();
        $this->load->view('tabel/luaranpenelitian3', $data);
        $this->load->view('layout/footer');
    }

    public function luaranpenelitian4()
    {
        $this->load->model("Tabelluaranpenelitian4_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["luaranpenelitian4"] = $this->Tabelluaranpenelitian4_model->getAll();
        $this->load->view('tabel/luaranpenelitian4', $data);
        $this->load->view('layout/footer');
    }

    public function karyailmiah()
    {
        $this->load->model("Tabelkaryailmiah_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["karyailmiah"] = $this->Tabelkaryailmiah_model->getAll();
        $this->load->view('tabel/karyailmiah', $data);
        $this->load->view('layout/footer');
    }

    public function produkjasa()
    {
        $this->load->model("Tabelprodukjasa_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["produkjasa"] = $this->Tabelprodukjasa_model->getAll();
        $this->load->view('tabel/produkjasa', $data);
        $this->load->view('layout/footer');
    }
}