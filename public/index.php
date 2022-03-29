<?php

require __DIR__.'/../bootstrap.php';


// $app->get('/update/user/{id}', function ( $request, $response, $args) {
//     $response->getBody()->write("Hello world !");
//     var_dump($args);
//     return $response;
// });

foreach($routes as $index => $route){
   $app->get($index,$route);
}

$app->run();