<?php

use Weliton\TwigSlim\Controllers\ContatoController;
use Weliton\TwigSlim\Controllers\HomeController;
use Weliton\TwigSlim\Controllers\UpdateController;

    return[

        '/' => HomeController::class.':index',
        '/contato' => ContatoController::class.':index',
        '/update/user/{id}'=> UpdateController::class.'update'
    ];