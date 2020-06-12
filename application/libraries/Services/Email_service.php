<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/** Email service */
class Email_service
{
    /** CI_Instance */
    private $CI;

    /** PHPMailer Instance */
    private $mail;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->library('phpmailer_lib');

        $this->mail = $this->CI->phpmailer_lib->load();

        // $this->mail->SMTPDebug = 2;
        $this->mail->isSMTP();
        $this->mail->SMTPAutoTLS = false;
        $this->mail->Host     = 'smtp.hostinger.co.id';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'mail@sisjamtu.com';
        $this->mail->Password = 'EmailPunyaSISJAMTU12345';
        $this->mail->SMTPSecure = 'STARTTLS';
        $this->mail->Port     = 587;

        $this->mail->setFrom('mail@sisjamtu.com', 'Sistem Penjaminan Mutu');
        $this->mail->addReplyTo('mail@sisjamtu.com', 'Sistem Penjaminan Mutu');
    }

    public function plain_email($receiver, $subject, $message)
    {
        $this->mail->addAddress($receiver);
        $this->mail->Subject = $subject;
        $this->mail->isHTML(true);
        $this->mail->Body = $message;
        try {
            if(!$this->mail->send()){
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $this->mail->ErrorInfo;
            }else{
                return true;
            }
        } catch (Exception $e) {
            var_dump($e);
        }
    }

    /**
     * @param String $receiver alamat email penerima
     * @param Array $data 'nama', 'kode_token'
     */
    public function register_token($receiver, $data)
    {
        $this->mail->addAddress($receiver);
        $this->mail->Subject = "Pemberitahuan";
        $this->mail->isHTML(true);
        $this->mail->Body = $this->CI->load->view('email/register_token', $data, TRUE);
        try {
            if(!$this->mail->send()){
                return ['error' => $this->mail->ErrorInfo];
            }else{
                return true;
            }
        } catch (Exception $e) {
            var_dump($e);
        }
    }
}