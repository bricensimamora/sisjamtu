<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemberitahuan extends CI_Controller {

	public function buatpemberitahuan()
	{
        $this->load->model('Buatpemberitahuan_model');
        $judulPemberitahuan = $this->input->post("judul");
		$isiPemberitahuan = $this->input->post("isi");

		$data = array(
			'judulArtikel' => $judulPemberitahuan,
			'isiArtikel' => $isiPemberitahuan
		);

		$this->Buatpemberitahuan_model->insert($data);
		redirect('beranda', 'refresh');
	}
}
