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
            $session_data = ['is_login' => FALSE];
            $this->set_userdata($session_data);
        }

        /**
         * Mechanism: Jika pada segmen url pertama adalah "auth" akan dijalankan method sudah_login,
         * otherwise dijalankan method belum_login
         */
        if ( $this->CI->uri->segment(1, 0) == "auth" ) {
            $this->sudah_login();
        }else{
            $this->belum_login();
        }

        log_message('info', 'sisjamtu session class initialized');
    }

    /**
     * Jika sudah login maka akan diarahkan ke beranda 
     * @return void
     */
    public function sudah_login()
    {
        $session_data = $this->userdata();
        if ($session_data['is_login'] == TRUE) {
            $this->CI->load->helper('url');
            redirect('beranda', 'refresh');
        }
    }

    /**
     * Jika belum login maka akan diarahkan ke auth/login
     * @return void
     */
    public function belum_login()
    {
        $session_data = $this->userdata();
        if ($session_data['is_login'] == FALSE) {
            $this->CI->load->helper('url');
            redirect('auth/login', 'refresh');
        }
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
}
