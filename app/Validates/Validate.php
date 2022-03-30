<?php
    namespace Weliton\TwigSlim\Validates;
    
use Weliton\TwigSlim\Validates\Validations;

class Validate extends Validations
{
    private array $rules;

    public function validate(array $rules)
    {
        // pega as regras e separa por campos e valores
        foreach($rules as $field => $validation){
            if($this->hasOneValidation($validation)){
                $this->$validation($field);
            }
            
            if($this->hasTwoOrMoreValidation($validation)){
                $arrValidate = explode(':',$validation); 
                
                foreach($arrValidate as $validation){
                    $this->$validation($field);

                }
            }
        }
    }

    // verifica se tem uma validação
    private function hasOneValidation(string $validate):bool
    {
        return substr_count($validate,':') == 0;
    }
    
    // verifica se tem duas ou mais vaidaçôes
    private function hasTwoOrMoreValidation(string $validate):bool
    {
        return substr_count($validate,':') >= 1;
    }
}