<?php
require __DIR__ . '/../vendor/autoload.php';
session_start();

// Instantiate the app
$settings = require __DIR__ . '/../app/settings.php';
$container = new \Slim\Container($settings);

$app = new \Slim\App($container);

// Set up dependencies
require __DIR__ . '/../app/dependencies.php';

// Register middleware
require __DIR__ . '/../app/middleware.php';

// Register routes
require __DIR__ . '/../app/routes.php';

$app->run();
