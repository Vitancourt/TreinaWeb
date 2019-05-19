<?php
/**
 * Registrar aqui todas as dependencias
 */

use Illuminate\Database\Capsule\Manager as DB;

/**
 * Registra informações do Twig(Template Engine)
 */
$app->register(new Silex\Provider\TwigServiceProvider, [
    'twig.path' => __DIR__ . '/views'
]);

/**
 * Registro de constantes para o twig
 */
$app['url_base'] = URL_BASE;
$app['url_public'] = URL_PUBLIC;

/**
 * Registro para funcionar o Iluminate\Database
 */
$capsule = new DB;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => HOST,
    'database' => DB,
    'username' => USER,
    'password' => PASS,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->setAsGlobal();

unset($capsule);

/** 
 * Function Helper
 * Chamada do Twig nos Controllers
 */
function view() {
    global $app;
    return $app['twig'];
}