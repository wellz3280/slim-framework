<?php
    namespace Weliton\TwigSlim\Controllers;

use Weliton\TwigSlim\Traits\View;

class CadastroController implements InterfaceController
{
    use View;
    public function index(): void
    {
        $this->view('cadastro.html',[
            'titulo' => 'Cadastro de Usuarios ',
        ]);
    }

    // public function store()
    // {

    // }
}