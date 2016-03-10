<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$sc = include __DIR__.'/../framework/Chanic/container.php';

$request = Request::createFromGlobals();

/**
 * @var \Symfony\Component\HttpFoundation\Response $response
 */
$response = $sc->get('core')->handle($request);

$response->send();