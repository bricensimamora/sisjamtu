<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/** Email service */
class Email_service
{
    /** CI_Instance */
    private $CI;

    /** Email configuration */
    private $config_mail = [
        'protocol' => 'smtp',
        'wordwrap' => TRUE,
        'smtp_host' => 'smtp.hostinger.co.id',
        'smtp_user' => 'mail@sisjamtu.com',
        'smtp_pass' => 'EmailPunyaSISJAMTU12345',
        'smtp_port' => '587',
        'smtp_timeout' => 10,
        'mailtype' => 'html',
        'newline' => "\r\n"
    ];

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->library('email');
        $this->CI->email->initialize($this->config_mail);
        $this->CI->email->from('mail@sisjamtu.com', 'Sistem Penjaminan Mutu');
    }

    public function plain_email($receiver, $subject, $message)
    {
        $this->CI->email->to($receiver);
        $this->CI->email->subject($subject);
        $this->CI->email->message($message);
        try {
            $this->CI->email->send();
            return true;
        } catch (Exception $e) {
            var_dump($e);
        }
    }

    /**
     * @param [] $data 'nama', 'kode_token'
     */
    public function register_token($receiver, $data)
    {
        $this->CI->email->to($receiver);
        $this->CI->email->subject('Pemberitahuan 2');
        $message = $this->CI->load->view('email/register_token', $data, TRUE);
        $this->CI->email->message($message);
        try {
            $this->CI->email->send();
            return true;
        } catch (Exception $e) {
            var_dump($e);
        }
    }
}