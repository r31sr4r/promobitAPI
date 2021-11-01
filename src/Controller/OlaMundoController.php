<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController
{
    /**
     * /
     * @Route ("ola")
     */
    public function OlMundoAction(Request $request): Response
    {
        $pathInfo = $request->getPathInfo();
        $query = $request->query->all();

        return new JsonResponse([
            'mensagem' => 'Ol� Mundo!',
            'pathInfo' => $pathInfo,
            'query' => $query
        ]);
    }
}