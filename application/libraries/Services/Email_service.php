<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/** Email service */
class Email_service
{
    /** CI_Instance */
    private $CI;

    /** PHPMailer Instance */
    private $mail;

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
        $this->CI->load->library('phpmailer_lib');

        $this->mail = $this->CI->phpmailer_lib->load();

        // $this->mail->SMTPDebug = 2;
        $this->mail->isSMTP();
        $this->mail->SMTPAutoTLS = false;
        $this->mail->Host     = 'smtp.gmail.com';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'alfiankhusnul.01@gmail.com';
        $this->mail->Password = 'RespecT11';
        $this->mail->SMTPSecure = 'ssl';
        $this->mail->Port     = 465;

        $this->mail->setFrom('alfiankhusnul.01@gmail.com', 'Alfian Khusnul');
        $this->mail->addReplyTo('alfiankhusnul.01@gmail.com', 'Alfian Khusnul');
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
     * @param [] $data 'nama', 'kode_token'
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