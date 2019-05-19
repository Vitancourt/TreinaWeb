<?php

namespace Stox\Controllers;

class SiteController
{
    public function index()
    {
        return view()->render('fornecedores.twig');
    }
    
    public function rotanova()
    {
        return 'rota nova';
    }
}

