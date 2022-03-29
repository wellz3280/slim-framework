<?php
    namespace Weliton\TwigSlim\Traits;

trait Json
{
    protected array $data;
    protected string $name;

    public static function jsonEnc(string $name, array $data):void
    {
        header('Content-Type: application/json');
        echo json_encode([$name => $data]);
    }
}