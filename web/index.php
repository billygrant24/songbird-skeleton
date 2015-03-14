<?php

use Songbird\AppFactory;
use Symfony\Component\HttpFoundation\Request;

$loader = require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::createApplication(__DIR__ . '/../etc');

if ($app->get('Config')['app.debug']) {
    $app->startDebugging();
}

$response = $app->run(Request::createFromGlobals());

$response->send();