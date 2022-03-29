<?php

    namespace Weliton\TwigSlim\Controllers;

use Weliton\TwigSlim\Traits\View;

class HomeController implements InterfaceController
{
    use View;
    public function index():void
    {
        $this->view('home',[
            'nome' => 'weliton',
            'titulo' => 'Welitinho piranhudo'
        ]);

    }
}