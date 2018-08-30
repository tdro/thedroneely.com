<?php

// PHP mailer namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Form
{
    public $name;
    public $email;
    public $message;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;

        $this->isSpam();
        $this->isEmpty();
    }

    public function isSpam()
    {
        $spam = false;

        if (isset($_POST['contact'])) {
            $spam = $_POST['contact'];
        }

        if ((bool) $spam == true) {
            http_response_code(403);
            error_log('Contact Form Spam: Error 403');
            exit;
        }
    }

    public function isEmpty()
    {
        if ((bool) empty($this->name) == true
            || (bool) empty($this->email) == true
            || (bool) empty($this->message) == true
        ) {
            header('Location: /contact');
            exit;
        }
    }

    public function isSubmit()
    {
        // Include mail config
        $config = include '../AppConfig.php';

        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = 2;                             // Enable verbose debug output
            $mail->isSMTP();                                    // Set mailer to use SMTP
            $mail->Host = $config['mail']['host'];              // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                             // Enable SMTP authentication
            $mail->Username = $config['mail']['username'];      // SMTP username
            $mail->Password = $config['mail']['password'];      // SMTP password
            $mail->SMTPSecure = 'ssl';                          // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $config['mail']['port'];              // TCP port to connect to

            //Recipients
            $mail->setFrom('thedroneely@gmail.com', 'Thedro Neely');
            $mail->addAddress('thedroneely@gmail.com', 'Thedro Neely');
            $mail->addReplyTo($this->email, $this->name);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'New message from ' . $this->name;
            $mail->Body    = $this->message;
            $mail->AltBody = $this->message;

            //Send Mail
            $mail->send();

        } catch (Exception $e) {
            include '../app/views/mail-error.view.php';
        }
    }
}
