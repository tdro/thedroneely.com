<?php

return [
    'database' => [
        'dsn' => 'sql:;dbname=sql_database',
        'username' => 'sql_username',
        'password' => 'sql_password',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],

    'mail' => [
        'host' => 'email_host',
        'port' => 'email_port',
        'name' => 'email_name',
        'username' => 'email_username',
        'password' => 'email_password',
    ],

    'cms' => [
        'token' => 'cms_api_token',
    ]
];
