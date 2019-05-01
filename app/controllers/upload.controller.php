<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $uploadedFile = $_FILES['upload'] ?? null;

    if ($uploadedFile) {
        move_uploaded_file(
            $uploadedFile['tmp_name'], 'uploads/'
            . uniqid()
            . '-'
            . $uploadedFile['name']
        );
    }

}

require '../app/views/upload.view.php';
