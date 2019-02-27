<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$form = new Form(
    $name = $_POST['26471'] ?? null,
    $email = $_POST['26472'] ?? null,
    $message = $_POST['26478'] ?? null
);

$validEmail = PHPMailer::validateAddress($email, 'auto');

if ($validEmail === false ) {
    $mailError = 'Invalid email' . "\r" . '<em>'. $email . '</em>';
    include '../app/views/mail-error.view.php';
    return;
}

require '../app/views/mail-sent.view.php';

fastcgi_finish_request();
$form->isSubmit();

$contact['database']->insert(
    'contactform', [
    'name' => $form->name,
    'email' => $form->email,
    'message' => $form->message,
    ]
);
