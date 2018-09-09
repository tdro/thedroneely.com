<?php

/* composer autoloader */
require '../vendor/autoload.php';

/* source config file */
$config = include '../AppConfig.php';

/* database query setup */
$contact['database'] = new QueryBuilder(Connection::make($config['database']));
