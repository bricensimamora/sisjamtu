<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programstudi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Programstudi_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["program_studi"] = $this->Programstudi_model->getAll();
        $this->load->view('tabel/programstudi', $data);
    }
}