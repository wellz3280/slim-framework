<?php
    namespace Weliton\TwigSlim\Controllers;

use Weliton\TwigSlim\Traits\Json;
use Weliton\TwigSlim\Traits\View;

class ContatoController implements InterfaceController
{
    use View;
 
    public function index(): void
    {

       $this->view('contato.html',[
           'titulo' => 'Contato',
           'nome' => 'welitinho pirangueiro da massa'
       ]); 
    }
}