<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class monitoring extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(!$this->session->at_least_pengamat()){
            show_404();
        }
        $this->load->model("Monitoring_model");
        $this->load->library('form_validation');
	}
	
	public function monitore()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/tabel_sidebar_monitoring');
		$this->load->view('monitoring/monitor_ps');
		$this->load->view('layout/footer');
	}

	public function data()
	{
		echo json_encode($this->monitoring_model->findAll());
	}
	//tabel2

    public function seleksimhs()
    {
        echo json_encode($this->monitoring_model->seleksiMhsBaru());
    }

    public function seleksiMhsBaru()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_seleksimhsbaru');
        $this->load->view('layout/footer');
    }

	public function calonmhsdaftar()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
      	$this->load->view('monitoring/monitor_calonmhsdaftar');
        $this->load->view('layout/footer');
    }

	public function calonmhsseleksi()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
      	$this->load->view('monitoring/monitor_calonmhsseleksi');
        $this->load->view('layout/footer');
    }

	public function mhsaktif()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
      	$this->load->view('monitoring/monitor_mhsaktif');
        $this->load->view('layout/footer');
    }

    public function jmlhmhsasing()
    {
        echo json_encode($this->monitoring_model->jumlahMhsAsing());
    }

    public function mhsasing()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_mhsasing');
        $this->load->view('layout/footer');
    }

    public function jmldosentetap()
    {
        $s3 = $this->monitoring_model->jumlahDosenTetap();
        $s2 = $this->monitoring_model->jumlahDosenTetaps2();
        $a[0] = array('pendidikan' => "s2",
            'jumlah' =>$s2[0]->mag);
        $a[1] = array('pendidikan' => "s3",
            'jumlah' =>$s3[0]->dok);
        echo json_encode($a);
    }

    public function dosentetap()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_dosentetap');
        $this->load->view('layout/footer');
    }

        public function jmldosenpembimbing()
    {
        echo json_encode($this->monitoring_model->jumlahDosenPembimbing());
    }

    public function dosenpembimbing()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_dosenpembimbing');
        $this->load->view('layout/footer');
    }

    public function jmlewmpdosen()
    {
        echo json_encode($this->monitoring_model->jumlahEwmpDosen());
    }

    public function ewmpdosen()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_ewmpdosen');
        $this->load->view('layout/footer');
    }

    public function jmlpenelitiandtps()
    {
        echo json_encode($this->monitoring_model->jumlahPenelitianDtps());
    }

    public function penelitiandtps()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_penelitiandtps');
        $this->load->view('layout/footer');
    }

    public function jmlpkmdtps()
    {
        echo json_encode($this->monitoring_model->jumlahPkmDtps());
    }

    public function pkmdtps()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_pkmdtps');
        $this->load->view('layout/footer');
    }
    public function jmlpublikasidtps()
    {
        echo json_encode($this->monitoring_model->jumlahPublikasiDtps());
    }

    public function publikasidtps()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_publikasidtps');
        $this->load->view('layout/footer');
    }
    public function jmlpagelarandtps()
    {
        echo json_encode($this->monitoring_model->jumlahPagelaranDtps());
    }

    public function pagelarandtps()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_pagelarandtps');
        $this->load->view('layout/footer');
    }
    public function jmlkaryasitasi()
    {
        echo json_encode($this->monitoring_model->jumlahKaryaSitasi());
    }

    public function karyailmiahsitasi()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_karyasitasi');
        $this->load->view('layout/footer');
    }
    public function jmlkeuangan()
    {
        echo json_encode($this->monitoring_model->jumlahKeuangan());
    }

    public function keuangan()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_keuangan');
        $this->load->view('layout/footer');
    }

    public function monitorpendidikan()
    {        
        echo json_encode($this->monitoring_model->monpendidikan());
    }

    public function pendidikan()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_pendidikan');
        $this->load->view('layout/footer');
    }

    public function monitorpenelitian()
    {
        $tahun = $this->monitoring_model->getTahunPenelitian();
        $data = array();
        for($idx=0; $idx < count($tahun); $idx++) {
            $databaru= $this->monitoring_model->monpenelitian($tahun[$idx]->tahun);
            $data = array_merge($data, $databaru);
        }
        echo json_encode($data);
    }

    public function penelitian()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_penelitian');
        $this->load->view('layout/footer');
    }

    public function monitorpkm()
    {
        $tahun = $this->monitoring_model->getTahunPkm();
        $data = array();
        for($idx=0; $idx < count($tahun); $idx++) {
            $databaru= $this->monitoring_model->monpkm($tahun[$idx]->tahun);
            $data = array_merge($data, $databaru);
        }
        echo json_encode($data);
    }

    public function pkm()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_pkm');
        $this->load->view('layout/footer');
    }
    public function monitorluaran()
    {        
        echo json_encode($this->monitoring_model->monluaran());
    }

    public function luarancapaian()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_luaran');
        $this->load->view('layout/footer');
    }
    public function tabel()
    {       
        $tabel = $this->monitoring_model->showTabel();
        for($i=0; $i<3; $i++) { 
            $tabel2 = array_pop($tabel);
            $tabel3 = array_shift($tabel);
        }
        $tabel3 = array_shift($tabel);
       for($idx=0; $idx <count($tabel); $idx++) { 
        $data[$idx] = $this->monitoring_model->cekNull($tabel[$idx]->Tables_in_sisjamtu );

        if ($data[$idx]!=false) {
               $name[$idx] = array(
                'nama_tabel' =>$tabel[$idx]->Tables_in_sisjamtu,
                'status'=> true
               );
           } else {
            $name[$idx] = array(
                'nama_tabel' =>$tabel[$idx]->Tables_in_sisjamtu,
                'status'=> false
               );
            }
        }
        
        echo json_encode($name);
    }  
    public function pengisian()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tabel_sidebar_monitoring');
        $this->load->view('monitoring/monitor_pengisian');
        $this->load->view('layout/footer');
    }  
    public function ssl(){
     echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";
    }

}