<?php

namespace AllDigitalRewards\Skeleton\Controllers;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

abstract class AbstractController
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Response
     */
    protected $response;

    public function __construct($container)
    {
        $this->container = $container;
    }

    /**
     * @return Twig
     */
    protected function getView() : Twig
    {
        return $this->container->get('view');
    }
}
