<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

// Accéder aux données provenant de la requête¶
$request = Request::createFromGlobals();
// Ou simuler une Requête
// $request = Request::create('/hello-world', 'GET', array('name' => 'Fabien'));

// if (!isset($_SERVER['HTTP_HOST'])) {
if (null === $request->server->get('HTTP_HOST')) {
    exit('This script cannot be run from the CLI. Run it from a browser.'.PHP_EOL);
}

echo 'retrieve the URI being requested (e.g. /about) minus any query parameters: ';
debug($request->getPathInfo());

echo 'retrieve the HTTP verb: ';
debug($request->getMethod());

echo 'retrieve GET variables: ';
debug($request->query->all());

echo 'retrieve GET a variable: ';
debug($request->query->get('foo'));

echo 'retrieve POST variables:';
debug($request->request->all());

echo 'retrieve POST a variable:';
debug($request->request->get('bar'));

echo 'retrieve all SERVER variables: ';
debug($request->server->all());

echo 'retrieve an HTTP request header, with normalized, lowercase keys (eg. host): ';
debug($request->headers->get('host'));

echo 'retrieve all HTTP request header: ';
debug($request->headers->all());
