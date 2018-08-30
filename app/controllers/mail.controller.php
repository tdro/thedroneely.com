<?php
$form = new Form(
    $name = $_POST['26471'],
    $email = $_POST['26472'],
    $message = $_POST['26478']
);

$form->isSubmit();

// require '../app/views/mail-sent.view.php';
// fastcgi_finish_request();

$contact['database']->insert(
    'contactform', [
    'name' => $form->name,
    'email' => $form->email,
    'message' => $form->message,
    ]
);
