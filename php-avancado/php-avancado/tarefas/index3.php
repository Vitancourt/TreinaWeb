<?php

require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$rota = $request->getPathInfo();

switch($rota) {
    case '/':
        $response->setContent(sprintf('<b>%s</b> - Home do site', $rota));
        break;
    case '/contato':
        $response->setContent(sprintf('<b>%s</b> - Página de contato', $rota));
        break;
    default:
        $response->setContent('Ops. Página não encontrada.');
}

// Envia
$response->send();