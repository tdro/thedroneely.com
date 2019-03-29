<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $form = new Form();

    $form->name = $name = $_POST['26471'] ?? null;
    $form->email = $email = $_POST['26472'] ?? null;
    $form->message = $message = $_POST['26478'] ?? null;
    $form->spam = $spam = $_POST['agree'] ?? false;

    if ($form->isEmpty()) {
        include '../app/views/contact.view.php';
        return;
    }

    if ($form->isSpam()) {
        error_log('Contact Form Spam: Error 403');
        return http_response_code(403);
    }

    if ($form->isEmailValid() === false) {
        $emailError = 'Invalid email: ' . "\r" . '<b>'. $email . '</b>';
        include '../app/views/contact.view.php';
        return;
    }

    $formSuccess = true;

    $name = null;
    $email = null;
    $message = null;
    $spam = false;

    include '../app/views/contact.view.php';
    fastcgi_finish_request();

    $contact['database']->insert(
        'contactform', [
        'name' => $form->name,
        'email' => $form->email,
        'message' => $form->message,
        ]
    );

    $form->isSubmit();
    return;
}

require '../app/views/contact.view.php';
