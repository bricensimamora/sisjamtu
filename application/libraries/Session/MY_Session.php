<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Library: Sisjamtu Session
 * Dengan menggunakan librarty ini tidak perlu lagi load library session milik CI.
 * TODO: Buat ke multilevel user, to: Alfian
 */
class MY_Session extends CI_Session
{
    protected $permission = array();
    protected $CI;

    /**
     * Ini berisi array string dari nama-nama class yang dikecualikan.
     * Dalam hal ini, berisi class yang berfungsi sebagai tempat login.
     */
    private $controller_exceptions = [
        "auth"
    ];

    private $nama_class = "auth";

    /**
     * Class construtor
     */
    public function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();

        /**
         * Mechanism: Jika belum ada userdata 'is_login' maka akan dibuat userdata['is_login'] = FALSE
         */
        if ( !($this->has_userdata('is_login')) ) {
            $this->set_userdata(['is_login' => FALSE]);
        }

        $this->check_login();

        log_message('info', 'sisjamtu session class initialized');
    }

    /**
     * Mengisi variabel $permission
     * @param array $permission hak akses yang dipunya
     * @return void
     */
    public function set_permission($permission)
    {
        $this->permission = $permission;
    }

    /**
     * Mengakses variabel $permission
     * @return array hak akses yang dipunya
     */
    public function get_permission()
    {
        return $this->permission;
    }

    /**
     * Mengambil controller yang menggunakan MY_Session
     * @return String $namaController
     */
    protected function get_controller_name()
    {
        return $this->CI->router->fetch_class();
    }

    /**
     * Cek apakah sudah ada data login di session, jika belum diarahkan ke auth/login
     * @return void
     */
    public function check_login()
    {
        if (!$this->userdata('is_login')) {
            if(!in_array($this->get_controller_name(), $this->controller_exceptions)){
                $this->set_userdata(["redirect" => $this->CI->uri->uri_string()]);
                redirect('auth/login', 'refresh');
            }
        } 
    }

    /**
     * Fungsi untuk cek apakah memiliki role superadmin
     * @return Boolean TRUE jika benar, FALSE lainnya.
     */
    public function is_superadmin()
    {
        if($this->userdata('data')['role'] == 1)
        {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    /**
     * Fungsi untuk cek apakah memiliki role admin
     * @return Boolean TRUE jika benar, FALSE lainnya.
     */
    public function is_admin()
    {
        if($this->userdata('data')['role'] <= 2)
        {
            return TRUE;
        }else
        {
            return FALSE;
        }
    }

    /**
     * Fungsi untuk mengembalikan 404 file jika tidak memiliki role admin.
     * @return Void
     */
    public function has_admin()
    {
        if(!$this->is_admin())
        {
            show_404();
        }
    }

    /**
     * Fungsi untuk cek apakah memiliki role pengamat
     * @return Boolean TRUE jika benar, FALSE lainnya.
     */
    public function is_pengamat()
    {
        if($this->userdata('data')['role'] == 3)
        {
            return TRUE;
        }else
        {
            return FALSE;
        }
    }

    /**
     * Fungsi untuk cek minimal memiliki role pengamat
     * @return Boolean TRUE jika benar, FALSE lainnya.
     */
    public function at_least_pengamat()
    {
        if($this->userdata('data')['role'] <= 3)
        {
            return TRUE;
        }else
        {
            return FALSE;
        }
    }

    /**
     * Fungsi untuk mengembalikan 404 file jika tidak memiliki role pengamat atau lebih tinggi.
     * @return Void
     */
    public function has_pengamat()
    {
        if(!$this->at_least_pengamat())
        { 
            show_404();
        }
    }



    /**
     * Fungsi untuk cek apakah memiliki role token
     * @return Boolean TRUE jika benar, FALSE lainnya.
     */
    public function is_token()
    {
        if($this->userdata('data')['role'] == 4)
        {
            return TRUE;
        }else
        {
            return FALSE;
        }
    }
}
