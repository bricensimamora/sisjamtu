<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Token_services  
{
    private $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('model_token');
    }

    private function status_to_string($tokens)
    {
        $hasil = $tokens;

        foreach ($tokens as $key => $value) {
            if ($value["status"] === "1")
            {
                $hasil[$key]["status"] = "created";
            }
            elseif ($value["status"] === "2")
            {
                $hasil[$key]["status"] = "in progress";
            }
            elseif ($value["status"] === "3")
            {
                $hasil[$key]["status"] = "submited";
            }
        }
        return $hasil;
    }

    public function get($id = null)
    {
        if($id == null)
        {
            return $this->status_to_string($this->CI->model_token->getAll());
        }else
        {
            return $this->status_to_string($this->CI->model_token->get($id));
        }
    }

    public function input($id_unit, $id_tabels, $tanggal_kadaluarsa)
    {
        $data = [
            "idUsers" => $id_unit,
            "token" => $this->get_new_token(),
            "expDate" => date('Y-m-d',strtotime($tanggal_kadaluarsa)),
            "status" => 1,
            "tabels" => $id_tabels
        ];
        $this->CI->model_token->create($data);
    }

    public function refresh_token($id_token)
    {
        $data = ["token" => $this->get_new_token()];
        return $this->CI->model_token->edit($id_token, $data);
    }

    private function get_new_token()
    {
        $this->CI->load->helper('string');
        $token = strtolower(random_string('alnum', 8));
        while ($this->CI->model_token->get_by_token($token)->num_rows() > 0) {
            $token = strtolower(random_string('alnum', 8));
        }
        return $token;
    }
}

class Token_Entity
{
    private $id;
    private $idUsers;
    private $token;
    private $expDate;
    private $status;
    private $tabels;

    public function construct(){
        
    }

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getIdUsers(){
		return $this->idUsers;
	}

	public function setIdUsers($idUsers){
		$this->idUsers = $idUsers;
	}

	public function getToken(){
		return $this->token;
	}

	public function setToken($token){
		$this->token = $token;
	}

	public function getExpDate(){
		return $this->expDate;
	}

	public function setExpDate($expDate){
		$this->expDate = $expDate;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public function getTabels(){
		return $this->tabels;
	}

	public function setTabels($tabels){
		$this->tabels = $tabels;
	}
}