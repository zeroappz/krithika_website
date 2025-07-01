<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require  '../vendor/phpmailer/phpmailer/src/Exception.php';
require  '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require  '../vendor/phpmailer/phpmailer/src/SMTP.php';


class EmailSender
{
    private $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true);

        // Server settings
        $this->mailer->isSMTP();
        $this->mailer->Host       = 'mail.macincode.com';
        $this->mailer->SMTPAuth   = true;
        $this->mailer->Username   = 'dev@macincode.com';
        $this->mailer->Password   = 'xy-I&Ee~Ad[N'; //'jeginmaccollab';
        $this->mailer->SMTPSecure = 'tls';
        $this->mailer->Port       = 587;

        // Additional settings if needed
        // $this->mailer->Timeout = 5; // seconds
        // $this->mailer->SMTPDebug  = 2; // Enable verbose debug output
        //$this->mailer->CharSet    = 'UTF-8';
        //$this->mailer->setLanguage('en', 'path/to/PHPMailer/language/');
    }

    public function sendEmail($to, $subject, $message)
    {

        try {

            // Recipients
            $this->mailer->setFrom('dev@macincode.com', 'Kirthika Dental Care');
            $this->mailer->addAddress($to);

            // Content
            $this->mailer->isHTML(true);
            $this->mailer->Subject = $subject;
            $this->mailer->Body    = $message;

            // Send the email
            if ($this->mailer->send()) {
                // echo 'Email sent successfully';
                return true;
            } else {              
                return false;
            }           
        } catch (Exception $e) {
            return false;
        }
    }
}
