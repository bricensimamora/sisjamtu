<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tabels_model');
        
    }

    public function index()
    {
        $data["tabels"] = $this->tabels_model->get_all();
        $data["active"] = "dashboard";
        $this->load->view('kuesioner/kuesioner_header');
        $this->load->view('kuesioner/kuesioner_sidebar', $data);
        $this->load->view('kuesioner/tabel_3a2');
        $this->load->view('kuesioner/kuesioner_footer');
    }

    public function t($tabel = null)
    {
        if ($tabel === null) {
            redirect("kuesioner");
        } else
        {
            if (file_exists(VIEWPATH."kuesioner/tabel_".$tabel.".php"))
            {
                $data["tabels"] = $this->tabels_model->get_all();
                $data["active"] = $tabel;
                $this->load->view('kuesioner/kuesioner_header');
                $this->load->view('kuesioner/kuesioner_sidebar', $data);
                $this->load->view('kuesioner/tabel_'.$tabel);
                $this->load->view('kuesioner/kuesioner_footer');
            } else
            {
                redirect("kuesioner");
            }
        }
    }

    public function p()
    {
        // var_dump($_POST);
        $id_unit = $this->input->post("inputName");
        $id_tabel = $this->input->post("inputTabel");
        $tanggal_kadaluarsa = $this->input->post("inputKadaluarsa");
        echo "id tabel: ".$id_tabel."<br>id user: ".$id_unit."<br>tanggal: ".$tanggal_kadaluarsa;
    }

}