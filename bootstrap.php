<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


require __DIR__ . '/vendor/autoload.php';

// iniciando Sessão
session_start();
// criando a instancia de app
$app = AppFactory::create();

// habilitando erros
$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true,true,true);

// criando objetos 
$response = Response::class;
$request = Request::class;

// rotas
$routes = require __DIR__.'/config/routes.php';

