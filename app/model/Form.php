<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Form
{
    public $name;
    public $email;
    public $message;
    public $spam;

    public function isSpam()
    {
        if ((bool) $this->spam == true) {
            error_log('Contact Form Spam: Error 403');
            return true;
        }
    }

    public function isEmpty()
    {
        if ((bool) empty($this->email) == true
            || (bool) empty($this->message) == true
        ) {
            return true;
        }
    }

    public function isEmailValid()
    {
        return $email = PHPMailer::validateAddress($this->email, 'auto');
    }

    public function isSubmit()
    {
        // Include mail config
        $config = include '../AppConfig.php';

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                    // Set mailer to use SMTP
            $mail->Host = $config['mail']['host'];              // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                             // Enable SMTP authentication
            $mail->Username = $config['mail']['username'];      // SMTP username
            $mail->Password = $config['mail']['password'];      // SMTP password
            $mail->SMTPSecure = 'ssl';                          // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $config['mail']['port'];              // TCP port to connect to

            //Recipients
            $mail->setFrom($config['mail']['username'], 'Thedro Neely');
            $mail->addAddress($config['mail']['username'], 'Thedro Neely');
            $mail->addReplyTo($this->email, $this->name);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'New message from ' . $this->name;
            $mail->Body    = $this->message;
            $mail->AltBody = $this->message;

            //Send Mail
            $mail->send();

        } catch (Exception $exception) {
            log_exception($exception);
        }
    }
}
