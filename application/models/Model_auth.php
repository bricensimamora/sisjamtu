<?php

class Model_auth extends CI_Model 
{
    public function __construct()
	{
		parent::__construct();
    }
    
    /**
     * fungsi ini untuk melakukan pengecekan apakah email sudah ada di DB atau tidak
     * @param   string  $email Email yang ingin dicek
     * @return  boolean true jika email ada di DB, false sebaliknya.
     */
    public function check_email($email)
    {
        if ($email)
        {
            $sql = "SELECT * FROM users WHERE email = ?";
            $query = $this->db->query($sql, [$email]);
            $result = $query->num_rows();
            return ($result == 1)? true : false;
        }
        return false;
    }

    /**
     * fungsi ini untuk melakukan login session, jelas lah ya.
     * @param   string  $email Email yang digunakan untuk login, harus ada di DB
     * @param   string  $password Password yang digunakan untuk login
     * @return  boolean true jika kombinasi ditemukan di DB, false jika sebaliknya.
     */
    public function login($email, $password)
    {
        if($email && $password)
        {
            $sql = "SELECT * FROM users WHERE email=?";
            $result = $this->db->query($sql, array($email));
            
            if ($result->num_rows() == 1)
            {
                /**
                 * TODO: Lakukan fungsi login dengan hash. To Alfian
                 */
                $result = $result->row_array();
                if ($this->confirmPassword($email, $password)) {
                    return $result;
                } else {
                    return false;
                }
                
            } else 
            {
                return false;
            }
        } else
        {
            return false;
        }
    }

    /**
     * fungsi untuk membuat hash password
     * @param   string  $password   password yang akan dihash
     * @return  string  string hash yang telah dibuat
     * @see https://www.php.net/manual/en/function.password-hash.php
     */
    public function makeHash($password)
    {
        $pass_prep = hash_hmac("sha256", $password, $this->getConfigVariable("merica"));
        return password_hash($pass_prep, PASSWORD_DEFAULT);
    }

    /**
     * fungsi untuk melakukan matching email dan password.
     * @param   string  $email      email yang ingin dicek.
     * @param   string  $password   password yang ingin dicek.
     * @return  boolean true jika match, false sebaliknya.
     */
    public function confirmPassword($email, $password)
    {
        $pass_prep = hash_hmac("sha256", $password, $this->getConfigVariable("merica"));
        $pass_hash = $this->getPasswordHash($email);
        return (password_verify($pass_prep, $pass_hash))? true : false;
    }

    /**
     * fungsi untuk memanggil password sesuai email pengguna
     * @param   string  $email  email pengguna
     * @return  string  password hash yang disimpan di DB.
     */
    public function getPasswordHash($email)
    {
        if($email)
        {
            $sql = "SELECT password FROM users WHERE email = ?";
            $result = $this->db->query($sql, [$email]);
            if($result->num_rows() == 1)
            {
                $result = $result->row_array();
                return $result['password'];
            }else {
                return false;
            }
        }else {
            return false;
        }
    }


    /**
     * fungsi untuk mengambil variabel dari file config
     * @param   string  $variable   variabel yg mau diambil
     * @return  string  variable yg diambil
     */
    public function getConfigVariable($variable)
    {
        return $this->config->item($variable);
    }
}