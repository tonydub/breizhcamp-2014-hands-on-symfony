<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;

$response = new Response();

$response->setContent(<<<HTML
<html>
    <body>
        <h1>Hello world!</h1>
    </body>
</html>
HTML
);

$response->setStatusCode(200);

$response->headers->set('Content-Type', 'text/html');

// prints the HTTP headers followed by the content
$response->send();
