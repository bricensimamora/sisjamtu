<?php

class Tabels_model extends CI_Model
{
    private $_table = "tabels";

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {}

    /**
     * Mendapatkan semua data dari table tabels
     * @return Array Array.Result
     */
    public function get_all()
    {
        // $this->db->select('kode');
        return $this->db->get($this->_table)->result_array();
    }

    /**
     * Mendapatkan tabel dari $id_token dan filled == 0
     * @param String $id_token. ID token (AI)
     * @param Object $Object.Result
     */
    public function get_kosong_id($id_token)
    {
        return $this->db->get_where($this->_table, ['id_token'=>$id_token,'filled'=>0]);
    }

    /**
     * Mendapatkan tabel dari $id_token dan filled == 1
     * @param String $id_token. ID token (AI)
     * @param Object $Object.Result
     */
    public function get_terisi_id($id_token)
    {
        return $this->db->get_where($this->_table, ['id_token'=>$id_token,'filled'=>1]);
    }

    /**
     * Mengubah data tabel dari $id_tabel
     * @param String $id_tabel. ID tabel (AI)
     */
    public function update($id_tabel, $data)
    {
        $this->db->where(['id' => $id_tabel]);
        return $this->db->update($this->_table, $data);
    }

    /**
     * Mendapatkan tabel dengan $id_token == 0
     * @return Array $Array.Result
     */
    public function get_tabel_kosong()
    {
        return $this->db->get_where($this->_table, ['id_token' => 0])->result_array();
    }

    /**
     * Mendapatkan tabel dengan $id_token dan $kode
     * @param String $id_token. ID token (AI)
     * @param String $kode. Kode tabel (Define)
     */
    public function check_token_kode($id_token, $kode)
    {
        return $this->db->get_where($this->_table, ['id_token' => $id_token, 'kode' => $kode])->result_array();
    }

    /**
     * Mendapatkan tabel dengan $id_token atau $id_token == 0
     * @param String $id_token. ID token (AI)
     * @return Object $Object.Result
     */
    public function get_kosong_edit($id_token)
    {
        $this->db->where(['id_token'=>$id_token]);
        $this->db->or_where(['id_token'=>0]);
        return $this->db->get($this->_table);
    }

    /**
     * Mendapatkan id tabel dengan $id_token atau $id_token == 0
     * @param String $id_token. ID token (AI)
     * @return Object $Object.ResultString
     */
    public function get_id_kosong_edit($id_token)
    {
        $this->db->select('id');
        $this->db->where(['id_token'=>$id_token]);
        $this->db->or_where(['id_token'=>0]);
        return $this->db->get($this->_table);
    }

    /**
     * Mendapatkan tabel dengan $id_token
     * @param String $id_token. ID token (AI)
     * @return Object $Object.Result
     */
    public function get_by_token($id_token)
    {
        return $this->db->get_where($this->_table, ['id_token' => $id_token]);
    }
}