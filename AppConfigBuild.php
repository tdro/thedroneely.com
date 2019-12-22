<?php

return [
    'database' => [
        'name' => 'pgsql_database',
        'username' => 'pgsql_username',
        'password' => 'pgsql_password',
        'connection' => 'pgsql:',
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
