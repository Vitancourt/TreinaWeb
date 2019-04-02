<?php

require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TreinaWeb\Core;

$app = new Core();

// Rotas.
$app->route('/', function(){
    return new Response('Index');
});

$app->route('/contato', function(){
    return new Response('Página de contato.');
});

$app->route('/sobre', function(){
    return new Response('Sobre o projeto.');
});

$app->route('/produto/{id}', function($id){
    return new Response('O produto de id igual a <b>' . $id . '</b> foi acessado.');
});

$app->route('/carro/{nome}/ano/{ano}', function($nome, $ano){
    return new Response(sprintf('Carro: %s (%s)', $nome, $ano));
});

// Lida com a requisição
$request = Request::createFromGlobals();
$response = $app->handle($request);
$response->send();