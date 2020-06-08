<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_service
{
    private $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model(['pengisi_model', 'tabels_model']);
    }

    /**
     * Mengembalikan list tabel yang sudah terisi.
     * @return tabel[];
     */
    public function get_tabel_terisi($id_token)
    {
        return $this->CI->tabels_model->get_terisi_id($id_token)->result_array();
    }

    /**
     * Mengembalikan list tabel yang masih kosong.
     * @return tabel[];
     */
    public function get_tabel_kosong($id_token)
    {
        return $this->CI->tabels_model->get_kosong_id($id_token)->result_array();
    }

    /**
     * Mengembalikan pengisi
     * @return pengisi;
     */
    public function get_pengisi($id_token)
    {
        return $this->CI->pengisi_model->get_by_token($id_token)->row_array();
    }

    public function edit($id_token, $data)
    {
        return $this->CI->pengisi_model->update_by_token($id_token, $data);
    }

    /**
     * Melakukan submit keseluruhan, user tidak dapat lagi masuk kuesioner.
     * @return Void;
     */
    public function submit_all()
    {}
}