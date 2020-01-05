<?php

/**
 * Helper Functions
 */

function featherIcon(string $name, string $class = null)
{
    return str_replace(
        '<svg', '<svg class="' . $class . '" ',
        file_get_contents(
            $_SERVER['DOCUMENT_ROOT']
            . '/..' . '/public/css/fonts/feather-icons/' . $name . '.svg'
        )
    );
}

function base64(string $path)
{
    echo base64_encode(
        file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . $path)
    );
}

function views(string $folder, string $name)
{
    return $_SERVER['DOCUMENT_ROOT'] . '/..' . '/app/views/' . $folder . '/' . $name .'.php';
}

function fetch(string $path, string $field)
{
    $config = include $_SERVER['DOCUMENT_ROOT'] . '/..' . '/AppConfig.php';
    $json = file_get_contents(
        $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME']
        .  $path . '?token=' . $config['cms']['token']
    );
    $data = json_decode($json, true);
    echo $data[$field];
}
