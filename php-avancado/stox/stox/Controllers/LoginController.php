<?php
namespace Stox\Controllers;

use Silex\Application;
use Stox\Models\Usuario;
use Stox\Auth\BaseAuth;

class LoginController
{
    public function index()
    {
        return view()->render('login/login.twig', [
            'token' => BaseAuth::tokenGen()
        ]);
    }
    
    public function cadastrar()
    {
        return view()->render('login/cadastrar.twig');
    }
    
    public function login(Application $app)
    {
        $req = $app['request']->request;
        $auth = new BaseAuth;
        
        // Anti CSRF
        if (false === $auth->tokenVerify($req->get('_token'))) {
            return $app->redirect(URL_BASE);
        }
        
        // Verificar login aqui ...
        
        session()->set('error', 'Usuário ou senha inválido');
        return $app->redirect(URL_BASE);
    }
}

