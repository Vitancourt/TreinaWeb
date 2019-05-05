<?php

require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;

$response = new Response();

$response->setContent('<html><body><h1>Mas todos repetem esse tal de Alô Mundo! </h1></body></html>');
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

$response->send();