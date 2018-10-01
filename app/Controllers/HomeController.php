<?php

namespace AllDigitalRewards\Skeleton\Controllers;

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class HomeController extends AbstractController
{
    public function home(Request $request, Response $response): ResponseInterface
    {
        $this->request = $request;
        $this->response = $response;

        return $this
            ->getView()
            ->render(
                $response,
                'home/home.twig',
                []
            );
    }
}
