<?php

/* composer autoload */
require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/vendor/autoload.php';

/* source helper functions */
require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/bootstrap/Helpers.php';

/* source config file */
$config = include $_SERVER['DOCUMENT_ROOT'] . '/..' . '/config.php';

/* connect database */
$contact['database'] = new QueryBuilder(Connection::make($config['database']));

/* create new router */
$router = new Router;

/* create navigator */
$navigation = new Navigation();

/* create new theme */
$theme = new Theme;

/* enable dark and light themes */
$theme->toggle();
