<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
     public function __construct()
    {
        parent::__construct();
        $this->load->model("Monitoring_model");
        $this->load->library('form_validation');
    }

     public function send()
     {
          $this->load->view('layout/header');
          $this->load->view('layout/tabel_sidebar_monitoring');
          // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->SMTPAutoTLS = false;
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'meidianrinaldi1905@gmail.com';
        $mail->Password = '.adgjmptw123';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom('meidianrinaldi1905@gmail.com', 'Meidian Rinaldi');
        $mail->addReplyTo('meidianrinaldi1905@gmail.com', 'Meidian Rinaldi');
        
        // Add a recipient
        $mail->addAddress('meidianrinaldi1998@gmail.com');
        
        // Add cc or bcc 
        $mail->addCC('');
        $mail->addBCC('');
        
        // Email subject
        $mail->Subject = 'Peringatan Pengisian Daftar Isian Akreditasi Program Studi ';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = "<p>Kepada yth bapak/ibu di tempat</p>
            <p>Dimohon kesediaannya untuk segera mengisi daftar IAPS yang telah diberikan, mengingat pentingnya hal tersebut untuk pemrosesan akreditasi program studi.</p>
            <p>Atas perhatiannya kami ucapkan terima kasih."; 
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
          
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            $this->load->view('monitoring/monitor_email');
        }

        $this->load->view('layout/footer');

     }

}