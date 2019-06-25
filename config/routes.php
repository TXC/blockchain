<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

$app->get('/', function (Request $request, Response $response) {

    return $this->get(Twig::class)->render($response, 'index.twig', []);
})->setName('root');

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});