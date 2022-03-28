<?php

require __DIR__.'/../bootstrap.php';


// $app->get('/update/user/{id}', function ( $request, $response, $args) {
//     $response->getBody()->write("Hello world !");
//     var_dump($args);
//     return $response;
// });
// trabalhando com rotas 
$app->get('/','app/controllers/Homecontroller:index');

$app->run();