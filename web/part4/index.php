<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$path = $request->getPathInfo();

if (in_array($path, ['', '/'])) {
    $response = new Response('Welcome to the homepage.');
} elseif ('/hello' === $path) {
    $response = new Response('hello, World!');
} else {
    $response = new Response('(404) Page not found.', 404);
}

$response->send();
