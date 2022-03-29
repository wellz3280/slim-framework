<?php
    namespace Weliton\TwigSlim\model;

use PDO;

class Connection
{
    public static function connection():PDO
    {
        $pdo = new PDO("mysql:host=localhost;dbname=twig_slim;charset=utf8","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        return $pdo;
    }
}