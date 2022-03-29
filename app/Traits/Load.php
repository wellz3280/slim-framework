<?php
    namespace Weliton\TwigSlim\Traits;

trait Load
{
    protected string $path;

    public static function file():string
    {
        $vendorDir = dirname(dirname(__FILE__));
        return dirname($vendorDir);
    }   
}