<?php defined('BASEPATH') OR exit('No direct script access allowed');

class monitoring_model extends CI_Model {
		public function __construct()
	{
		parent::__construct();
    }

    public function findAll(){
    	
    	return $this->db->get('program_studi')->result();
    }
}