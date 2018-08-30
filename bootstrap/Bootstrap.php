<?php

/* composer autoloader */
require '../vendor/autoload.php';

/* app functions */
require '../app/Functions.php';

/* source config file */
$config = include '../AppConfig.php';

/* database query setup */
$contact['database'] = new QueryBuilder(Connection::make($config['database']));
