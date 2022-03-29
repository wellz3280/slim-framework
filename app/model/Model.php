<?php
    namespace Weliton\TwigSlim\model;

use PDO;

abstract class Model
{
    protected PDO $connect;

    public function __construct()
    {
        $this->connect = Connection::connection();

    }

    public function all():array
    {
        $sql = "SELECT * FROM {$this->table} ";
        $all = $this->connect->query($sql);
        $all->execute();

        return $all->fetchAll();
    }
}