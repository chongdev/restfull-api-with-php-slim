<?php

require 'vendor/autoload.php';

$app = new Slim\App();


$app->get('/', function ($request, $response, $args) {
    $response->write("Hello, API");
    return $response;
});


$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});

$app->run();