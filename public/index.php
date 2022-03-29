<?php

use Weliton\TwigSlim\Controllers\HomeController;

require __DIR__.'/../bootstrap.php';


// $app->get('/update/user/{id}', function ( $request, $response, $args) {
//     $response->getBody()->write("Hello world !");
//     var_dump($args);
//     return $response;
// });
// trabalhando com rotas 
$app->get('/','\Weliton\TwigSlim\Controllers\HomeController:index');
$app->get('/update/user/{id}','\Weliton\TwigSlim\Controllers\UpdateController:update');

$app->run();