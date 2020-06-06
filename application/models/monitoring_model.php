<?php defined('BASEPATH') OR exit('No direct script access allowed');

class monitoring_model extends CI_Model {
		public function __construct()
	{
		parent::__construct();
    }

    public function findAll(){
    	
    	return $this->db->get('tabel_ps')->result();
	}
	
	public function seleksiMhsBaru(){
    	
    	return $this->db->get('tabel_2a')->result();
    }


    public function jumlahMhsAsing(){
        return $this->db->get('tabel_2b')->result();
     
    }

    public function jumlahDosenTetap(){ 
       $data=  $this->db->query("SELECT COUNT(doktor) AS dok from tabel_3a1 WHERE doktor LIKE 'S3%'");
       
       return $data->result();

       
    }
    public function jumlahDosenTetaps2(){ 
        $data2=  $this->db->query("SELECT COUNT(magister) AS mag from tabel_3a1 WHERE magister LIKE 'S2%'");
        return $data2->result();

    }
     
    
    public function jumlahDosenPembimbing(){
       return $this->db->get('tabel_3a2')->result();
     
    }
    public function jumlahEwmpDosen(){
       return $this->db->get('tabel_3a3')->result();
     
    }
    public function jumlahPenelitianDtps(){
       return $this->db->get('tabel_3b2')->result();
     
    }
    public function jumlahPkmDtps(){
       return $this->db->get('tabel_3b3')->result();
     
    }
    public function jumlahPublikasiDtps(){
       return $this->db->get('tabel_3b4_1')->result();
     
    }
    public function jumlahPagelaranDtps(){
       return $this->db->get('tabel_3b4_2')->result();
     
    }
    public function jumlahKaryaSitasi(){
       return $this->db->get('tabel_3b6')->result();
     
    }
    public function jumlahKeuangan(){
       return $this->db->query("SELECT * FROM tabel_4 where jenisPenggunaan NOT LIKE '%Jumlah%'")->result();
     
    }
    public function monpendidikan(){
       return $this->db->get('tabel_5c')->result();
     
    }
    public function getTahunPenelitian(){
        return $this->db->query("SELECT DISTINCT tahun from tabel_6a")->result();
    }
    public function monpenelitian($tahun){
       return $this->db->query("SELECT DISTINCT tahun, COUNT(tahun) AS jumlah from tabel_6a where tahun ='".$tahun."';")->result();
     
    }
    public function getTahunPkm(){
        return $this->db->query("SELECT DISTINCT tahun from tabel_7")->result();
    }
    public function monpkm($tahun){
       return $this->db->query("SELECT DISTINCT tahun, COUNT(tahun) AS jumlah from tabel_7 where tahun ='".$tahun."';")->result();
     
    }
    public function monluaran(){
       return $this->db->get('tabel_8a')->result();
     
    }
    public function showTabel(){
       return $this->db->query("SHOW TABLES")->result();     
    }
    public function cekNull($tabel){
       return $this->db->query("SELECT * from ".$tabel."")->result();
    }
}