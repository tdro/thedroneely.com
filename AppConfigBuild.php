<?php

return [
    'database' => [
        'name' => 'thedroneely',
        'username' => 'pgsql_username',
        'password' => 'pgsql_password',
        'connection' => 'pgsql:',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],

    'mail' => [
        'host' => 'smtp.gmail.com',
        'port' => '465',
        'username' => 'email_username',
        'password' => 'email_password',
    ]
];
