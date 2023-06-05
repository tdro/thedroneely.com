<?php

require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/bootstrap/Helpers.php';

$config = include $_SERVER['DOCUMENT_ROOT'] . '/..' . '/config.php';

$contact['database'] = new QueryBuilder(Connection::make($config['database']));

$navigation = new Navigation;

$theme = new Theme;
$theme->toggle();
