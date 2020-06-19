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
    return $_SERVER['DOCUMENT_ROOT'] . '/..' . '/app/views/'
    . $folder . '/' . $name .'.php';
}

function cache(string $filename, string $data)
{
    file_put_contents(
        $_SERVER['DOCUMENT_ROOT'] . '/..' . '/app/storage/cache/'
        . base64_encode($filename), $data
    );
}

function fetch(string $uri, string $field)
{
    if (file_exists(
        $_SERVER['DOCUMENT_ROOT'] . '/..'
        . '/app/storage/cache/' . base64_encode($uri . $field)
    )
    ) {
        echo file_get_contents(
            $_SERVER['DOCUMENT_ROOT'] . '/..'
            . '/app/storage/cache/' . base64_encode($uri . $field)
        );
          return;
    }

    $config = include $_SERVER['DOCUMENT_ROOT'] . '/..' . '/config.php';

    $request = file_get_contents(
        $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME']
        .  $uri . '?token=' . $config['cms']['token']
    );

    $data = json_decode($request, true);
    cache($uri . $field, $data[$field]);
    echo $data[$field];
}
