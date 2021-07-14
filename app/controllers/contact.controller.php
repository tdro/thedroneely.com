<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $form = new Form();

    $form->name = $name = $_POST['26471'] ?? null;
    $form->email = $email = $_POST['26472'] ?? null;
    $form->message = $message = $_POST['26478'] ?? null;
    $form->spam = $spam = $_POST['agree'] ?? false;

    if ($form->empty()) {
        return http_response_code(403);
    }

    if ($form->spam()) {
        return http_response_code(403);
    }

    if ($form->emailValid() === false) {
        $emailError = 'Invalid email: ' . "\r" . '<b>'. $email . '</b>';
        return include '../app/views/contact.view.php';
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

    return $form->submit();
}

require '../app/views/contact.view.php';
