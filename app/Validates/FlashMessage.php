<?php
    namespace Weliton\TwigSlim\Validates;

abstract class FlashMessage
{
    public static function add($index,$message)
    {
        if(!isset($_SESSION[$index])){
            $_SESSION[$index];
        }
        
        
    }

    public static function get($index)
    {
        if(isset($_SESSION[$index])){
           $message =  $_SESSION[$index];
        }
        
        unset($_SESSION[$index]);

        return $message ?? '';
    }
    
}