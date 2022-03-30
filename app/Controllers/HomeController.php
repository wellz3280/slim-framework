<?php

    namespace Weliton\TwigSlim\Controllers;

use Weliton\TwigSlim\model\Post;
use Weliton\TwigSlim\Traits\Dump;

use Weliton\TwigSlim\Traits\View;

class HomeController implements InterfaceController
{
    use View;
    public function index():void
    {
        $post = new Post();
        
        $this->view('home.html',[
            'nome' => 'weliton',
            'titulo' => 'Welitinho pirangueiro',
            'post' => $post->all()
        ]);

    }
}