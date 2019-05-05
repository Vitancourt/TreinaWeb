<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

$app = new Silex\Application;

$app['debug'] = DEBUG;

// =========== Registros de dependencias ======

require __DIR__ . '/registers.php';

// =========== Rotas ======================

require __DIR__ . '/rotas.php';

// =========================================

$app->run();

