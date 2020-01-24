<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Programstudi_model extends CI_Model
{
    private $_table = "program_studi"; //nama tabel
    public $jenisProdi;
    public $namaProdi;
    public $status;
    public $tanggalSk;
    public $tanggalKadaluarsa;
    public $jumlahMahasiswa;

    public function rules()
    {
        return [
            ['field' => 'jenisProdi',
            'label' => 'JenisProdi',
            'rules' => 'required'],

            ['field' => 'namaProdi',
            'label' => 'NamaProdi',
            'rules' => 'required' ],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required'],

            ['field' => 'tanggalSk',
            'label' => 'TanggalSk',
            'rules' => 'required'],

            ['field' => 'tanggalKadaluarsa',
            'label' => 'TanggalKadaluarsa',
            'rules' => 'required'],

            ['field' => 'jumlahMahasiswa',
            'label' => 'JumlahMahasiswa',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}