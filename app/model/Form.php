<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Form
{
    public $name;
    public $email;
    public $message;
    public $spam;

    public function spam()
    {
        if ((bool) $this->spam == true) {
            error_log('Contact Form Spam: Error 403');
            return true;
        }
    }

    public function empty()
    {
        if ((bool) empty($this->email) == true
            || (bool) empty($this->message) == true
        ) {
            error_log('Contact Form Incomplete: Error 403');
            return true;
        }
    }

    public function emailValid()
    {
        return $email = PHPMailer::validateAddress($this->email, 'auto');
    }

    public function submit()
    {
        $config = include '../config.php';

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = $config['mail']['port'];
            $mail->Host = $config['mail']['host'];
            $mail->Username = $config['mail']['username'];
            $mail->Password = $config['mail']['password'];

            $mail->setFrom($config['mail']['username'], $config['mail']['name']);
            $mail->addAddress($config['mail']['username'], $config['mail']['name']);

            $mail->isHTML(true);
            $mail->Subject = 'New message from ' . $this->email;
            $mail->Body    = $this->message . "\n\n" . $this->name . "\n" . $this->email;
            $mail->AltBody = $this->message . "\n\n" . $this->name . "\n" . $this->email;

            $mail->send();

        } catch (Exception $exception) {
            error_log($exception);
        }
    }
}
