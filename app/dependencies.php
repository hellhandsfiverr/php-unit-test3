<?php
/**
 * Core Application Dependencies
 */
use Interop\Container\ContainerInterface;

$container['view'] = function (ContainerInterface $container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
        'cache' => false,
        'debug' => (getenv('ENVIRONMENT') === "development") ? true : false,
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};
