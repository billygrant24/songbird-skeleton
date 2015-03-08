<?php

use Songbird\AppFactory;
use Songbird\Config;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$loader = require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::createApplication(new Config(getcwd() . '/../etc'));

if ($app['Config']->get('app.debug')) {
    $app->startDebugging();
}

$response = $app->run(Request::createFromGlobals(), new Response());
$response->send();
