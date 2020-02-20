<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    /**
     * TODO: Buat hanya role admin yang bisa masuk sini. to:Alfian
     * comment: buat fungsi di construct, buat view sidebar menu sama kayak yang lain
     */

    public function __construct()
    {
        parent::__construct();
        // if (!admin) {
        //     # pergi
        // }

        // $this->load->library('form_validation');
    }
    
    public function index()
    {
        
    }

    public function pengguna()
    {
        //Cek pengguna pengguna
        //Form untuk membuaut pengguna

    }

    public function token()
    {
        //Cek udah ada token yg dibuat belum kalau ada tampilin

        //Form untuk membuat token
        // if($this->form_validation->run() == TRUE)
        // {

        // }

        $this->load->view("admin/header");
        $this->load->view("admin/admin_navbar");
        $this->load->view("admin/token_view");
        $this->load->view("admin/footer");
    }
}