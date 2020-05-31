<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Token extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->session->has_admin();
        $this->load->model(['pengguna_model', 'tabels_model']);
        $this->load->library(['form_validation','token_services']);
    }

    public function index()
    {
        $data['listUnit'] = $this->pengguna_model->get_unit_list();
        $data['listTabel'] = $this->tabels_model->get_all();
        $data['tokens'] = $this->token_services->get();
        $data["active"] = "token";

        $this->form_validation->set_rules('inputName', 'Nama Unit', 'required');
        $this->form_validation->set_rules('inputTabel[]', 'Nama Tabel', 'required');
        $this->form_validation->set_rules('inputKadaluarsa', 'Tanggal Kadaluarsa', 'required');

        if ($this->form_validation->run() == TRUE) {

            $id_unit = $this->input->post("inputName");
            $id_tabel = $this->input->post("inputTabel[]");
            $tanggal_kadaluarsa = $this->input->post("inputKadaluarsa");

            if ($id_unit && $id_tabel && $tanggal_kadaluarsa) {
                $this->token_services->input($id_unit, $id_tabel, $tanggal_kadaluarsa);
                redirect("admin/token", "refresh");
                // echo "sampai dalam if";
                // redirect('admin/dashboard', 'refresh');
            } else {
                // $data["error"] = "masukkan data dengan lengkap";
                // echo "sampai luar if";
                redirect('beranda', 'refresh');
            } 

        }else {
            $this->load->view("admin/header");
            $this->load->view("admin/admin_navbar");
            $this->load->view("admin/sidebar", $data);
            $this->load->view("admin/token_view", $data);
            $this->load->view("admin/footer");
        }

        
    }

    public function edit()
    {

    }

    public function delete()
    {
        
    }
}