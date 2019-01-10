<?php

/* composer autoload */
require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/vendor/autoload.php';;

/* source config file */
$config = include $_SERVER['DOCUMENT_ROOT'] . '/..' . '/AppConfig.php';;

/* connect database */
$contact['database'] = new QueryBuilder(Connection::make($config['database']));

/* create new router */
$router = new Router;

/* create navigator */
$navigation = new Navigation();
