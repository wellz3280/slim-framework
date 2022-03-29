<?php

    namespace Weliton\TwigSlim\Controllers;

use Weliton\TwigSlim\Traits\Load;
use Weliton\TwigSlim\Traits\View;

class HomeController implements InterfaceController
{
    use Load;
    use View;
    public function index():void
    {
        
        $this->view('home.html',[
            'nome' => 'weliton',
            'titulo' => 'Welitinho pirangueiro'
        ]);

    }
}