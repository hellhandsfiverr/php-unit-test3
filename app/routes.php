<?php
/**
 * Application HTTP Routes
 */
$app->get(
    '/',
    \AllDigitalRewards\Skeleton\Controllers\HomeController::class . ":home"
);
