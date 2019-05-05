<?php

namespace Stox\Auth;

use Stox\Models\Usuario;

class BaseAuth
{
    public function login($email, $senha)
    {
        // .. verificar login aqui
    }
    
    public function checkHash($senha, $hash)
    {
        // verifica o hash com password_verify
    }
    
    public function grant()    
    {
        session()->set('logged', true);
        session()->register('40 min');
    }
    
    public static function validate()
    {
        session()->valid();
        if (!session()->has('logged')) {
            return false;
        }
        return true;
    }
    
    public static function logout()
    {
        session()->destroy();
    }
    
    public static function tokenGen()
    {
        $token = sha1(rand(111111, 999999));
        session()->set('_token', $token);
        return $token;
    }
    
    public function tokenVerify($token)
    {
        if (!session()->has('_token')) {
            return false;
        }
        if ($token === session()->get('_token')) {
            return true;
        }
        return false;
    }
}

