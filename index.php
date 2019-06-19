<?php

require 'vendor/autoload.php';

$app = new Slim\App();


$app->get('/', function ($request, $response, $args) {

    // $data = array('data' => "Hello, API", 'message' => 'ss');
    // $newResponse = $oldResponse->withJson($data);

    $response->write("Hello, API");
    return $response;
});


$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});

$app->get('/err400', function (Request $req,  Response $res, $args = []) {
    return $res->withStatus(400)->write('Bad Request');
});

$app->get('/err302', function ($req, $res, $args) {
    return $res->withStatus(302)->withHeader('Location', 'your-new-uri');
  });


$app->run();