<?php
    namespace Weliton\TwigSlim\Controllers;


use Weliton\TwigSlim\Traits\View;
use Weliton\TwigSlim\Validates\Validate;

class CadastroController implements InterfaceController
{
    use View;
    public function index(): void
    {
        $this->view('cadastro.html',[
            'titulo' => 'Cadastro de Usuarios ',
        ]);
    }

    public function store()
    {
        $validate = new Validate;
        $validate->validate([
            'name' => 'required',
            'email' => 'required:email:unique@users',
            'phone' => 'required:phone',
        ]);

        if($validate->hasErrors()){
            // return back();
            echo "hehe";
        }
    }
}