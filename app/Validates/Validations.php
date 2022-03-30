<?php

 namespace Weliton\TwigSlim\Validates;

 class Validations
 {
    private array $errors = [];

    public function required($field):bool
    {
        $field = filter_input(INPUT_POST,$field);
        $flash = new Flash();
        if(empty($field)){
            $this->errors[$field][] = $flash->flash($field,$flash->error('Esse campo é obrigatório'));
            return true;
        }
    }

    public function email()
    {
       
    }

    public function unique()
    {

    }

    public function phone()
    {

    }

    public function hasErrors():bool
    {
        return !empty($this->errors);
    }
 }