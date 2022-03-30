<?php

require __DIR__.'/../bootstrap.php';


// $app->get('/update/user/{id}', function ( $request, $response, $args) {
//     $response->getBody()->write("Hello world !");
//     var_dump($args);
//     return $response;
// });

foreach($routes as $index => $route){
   if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $app->post($index,$route);
   }else{
      $app->get($index,$route);
   }
}

$app->run();