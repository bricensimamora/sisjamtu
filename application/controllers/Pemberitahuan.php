<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemberitahuan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		
		$this->load->model('Pemberitahuan_model');
    }

	public function buatpemberitahuan()
	{
		$this->load->library('form_validation');
		$judul = $this->input->post("judul");
		$isi = $this->input->post("isi");
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'judulArtikel' => $judul,
				'isiArtikel' => $isi
			);
	
			$this->Pemberitahuan_model->insert($data);
			redirect('beranda', 'refresh');
		} else {
			echo("form validation gagal");
		}
	}

	public function hapuspemberitahuan()
	{
		$id = $this->input->post("id");
		$this->Pemberitahuan_model->hapus($id);
		redirect('beranda', 'refresh');
	}
}
