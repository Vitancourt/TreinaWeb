<?php
namespace TreinaWeb;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class Core implements HttpKernelInterface 
{
    protected $rotas = [];

    public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true)
    {
        $rota = $request->getPathInfo();

        // Procura pela rota
        if (array_key_exists($rota, $this->rotas)) {
            $controller = $this->rotas[$rota];
            $response = $controller();
        } else {
            $response = new Response('URL não encontrada.', Response::HTTP_NOT_FOUND);
        }

        return $response;
    }

    public function route($route, $controller)
    {
        $this->rotas[$route] = $controller;
    }

}