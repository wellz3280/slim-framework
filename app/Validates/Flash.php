<?php
    namespace Weliton\TwigSlim\Validates;

class Flash extends FlashMessage
{
    public function flash($index,$message):self
    {
       parent::add($index,$message);
        return $this;
    }

    public function error($message):self
    {
        echo "<span class='alert alert-danger'> {$message} </span> ";
        return $this;
    }
}