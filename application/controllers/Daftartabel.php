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

    public function penggunaandana()
    {
        $this->load->model("Tabelpenggunaandana_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["penggunaandana"] = $this->Tabelpenggunaandana_model->getAll();
        $this->load->view('tabel/penggunaandana', $data);
        $this->load->view('layout/footer');
    }

    public function kurikulum()
    {
        $this->load->model("Tabelkurikulum_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["kurikulum"] = $this->Tabelkurikulum_model->getAll();
        $this->load->view('tabel/kurikulum', $data);
        $this->load->view('layout/footer');
    }

    public function integrasi()
    {
        $this->load->model("Tabelintegrasi_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["integrasi"] = $this->Tabelintegrasi_model->getAll();
        $this->load->view('tabel/integrasi', $data);
        $this->load->view('layout/footer');
    }

    public function kepuasan()
    {
        $this->load->model("Tabelkepuasan_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["kepuasan"] = $this->Tabelkepuasan_model->getAll();
        $this->load->view('tabel/kepuasanmahasiswa', $data);
        $this->load->view('layout/footer');
    }

    public function penelitiandgnsiswa()
    {
        $this->load->model("Tabelpenelitiandgnsiswa_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["penelitian"] = $this->Tabelpenelitiandgnsiswa_model->getAll();
        $this->load->view('tabel/penelitiandgnsiswa', $data);
        $this->load->view('layout/footer');
    }

    public function penelitianrujukan()
    {
        $this->load->model("Tabelpenelitianrujukan_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["penelitian"] = $this->Tabelpenelitianrujukan_model->getAll();
        $this->load->view('tabel/penelitianrujukan', $data);
        $this->load->view('layout/footer');
    }   

    public function pkmmahasiswa()
    {
        $this->load->model("Tabelpkmmahasiswa_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["pkmmahasiswa"] = $this->Tabelpkmmahasiswa_model->getAll();
        $this->load->view('tabel/pkmmahasiswa', $data);
        $this->load->view('layout/footer');
    }
    
    public function ipklulusan()
    {
        $this->load->model("Tabelipklulusan_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["ipklulusan"] = $this->Tabelipklulusan_model->getAll();
        $this->load->view('tabel/ipklulusan', $data);
        $this->load->view('layout/footer');
    }

    public function prestasiakademik()
    {
        $this->load->model("Tabelprestasiakademik_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["prestasi"] = $this->Tabelprestasiakademik_model->getAll();
        $this->load->view('tabel/prestasiakademik', $data);
        $this->load->view('layout/footer');
    }

    public function prestasinonakademik()
    {
        $this->load->model("Tabelprestasinonakademik_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["prestasi"] = $this->Tabelprestasinonakademik_model->getAll();
        $this->load->view('tabel/prestasinonakademik', $data);
        $this->load->view('layout/footer');
    }

    public function masastudi()
    {
        $this->load->model("Tabelmasastudid3_model");
        $this->load->model("Tabelmasastudid4_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["masastudid3"] = $this->Tabelmasastudid3_model->getAll();
        $data["masastudid4"] = $this->Tabelmasastudid4_model->getAll();
        $this->load->view('tabel/masastudi', $data);
        $this->load->view('layout/footer');
    }

    public function waktutunggu()
    {
        $this->load->model("Tabelwaktutunggud3_model");
        $this->load->model("Tabelwaktutunggud4_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["waktutunggud3"] = $this->Tabelwaktutunggud3_model->getAll();
        $data["waktutunggud4"] = $this->Tabelwaktutunggud4_model->getAll();
        $this->load->view('tabel/waktutunggu', $data);
        $this->load->view('layout/footer');
    }

    public function kesesuaianbidang()
    {
        $this->load->model("Tabelkesesuaianbidang_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["kesesuaianbidang"] = $this->Tabelkesesuaianbidang_model->getAll();
        $this->load->view('tabel/kesesuaianbidang', $data);
        $this->load->view('layout/footer');
    }

    public function tempatkerja()
    {
        $this->load->model("Tabeltempatkerja_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["tempatkerja"] = $this->Tabeltempatkerja_model->getAll();
        $this->load->view('tabel/tempatkerja', $data);
        $this->load->view('layout/footer');
    }

    public function reff()
    {
        $this->load->model("Tabelreff_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["reff"] = $this->Tabelreff_model->getAll();
        $this->load->view('tabel/tabelreff', $data);
        $this->load->view('layout/footer');
    }

    public function kepuasanpengguna()
    {
        $this->load->model("Tabelkepuasanpengguna_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["kepuasanpengguna"] = $this->Tabelkepuasanpengguna_model->getAll();
        $this->load->view('tabel/kepuasanpengguna', $data);
        $this->load->view('layout/footer');
    }

    public function publikasimahasiswa()
    {
        $this->load->model("Tabelpublikasimahasiswa_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["publikasimahasiswa"] = $this->Tabelpublikasimahasiswa_model->getAll();
        $this->load->view('tabel/publikasimahasiswa', $data);
        $this->load->view('layout/footer');
    }

    public function p4mahasiswa()
    {
        $this->load->model("Tabelp4mahasiswa_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["p4mahasiswa"] = $this->Tabelp4mahasiswa_model->getAll();
        $this->load->view('tabel/p4mahasiswa', $data);
        $this->load->view('layout/footer');
    }

    public function karyamahasiswa()
    {
        $this->load->model("Tabelkaryamahasiswa_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["karyamahasiswa"] = $this->Tabelkaryamahasiswa_model->getAll();
        $this->load->view('tabel/karyamahasiswa', $data);
        $this->load->view('layout/footer');
    }

    public function produk()
    {
        $this->load->model("Tabelproduk_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["produk"] = $this->Tabelproduk_model->getAll();
        $this->load->view('tabel/produk', $data);
        $this->load->view('layout/footer');
    }

    public function penelitianmahasiswa()
    {
        $this->load->model("Tabelpenelitianmahasiswa_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["penelitianmahasiswa"] = $this->Tabelpenelitianmahasiswa_model->getAll();
        $this->load->view('tabel/penelitianmahasiswa', $data);
        $this->load->view('layout/footer');
    }

    public function penelitianmahasiswa2()
    {
        $this->load->model("Tabelpenelitianmahasiswa2_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["penelitianmahasiswa2"] = $this->Tabelpenelitianmahasiswa2_model->getAll();
        $this->load->view('tabel/penelitianmahasiswa2', $data);
        $this->load->view('layout/footer');
    }

    public function penelitianmahasiswa3()
    {
        $this->load->model("Tabelpenelitianmahasiswa3_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["penelitianmahasiswa3"] = $this->Tabelpenelitianmahasiswa3_model->getAll();
        $this->load->view('tabel/penelitianmahasiswa3', $data);
        $this->load->view('layout/footer');
    }

    public function penelitianmahasiswa4()
    {
        $this->load->model("Tabelpenelitianmahasiswa4_model");
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar');
        $data["penelitianmahasiswa4"] = $this->Tabelpenelitianmahasiswa4_model->getAll();
        $this->load->view('tabel/penelitianmahasiswa4', $data);
        $this->load->view('layout/footer');
    }
}