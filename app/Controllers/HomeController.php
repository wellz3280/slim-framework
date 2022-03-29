<?php

    namespace Weliton\TwigSlim\Controllers;



class HomeController extends Controller
{
    public function index():void
    {
        $this->view('home',[
            'nome' => 'weliton',
            'titulo' => 'Home'
        ]);

    }
}