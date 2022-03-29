<?php
    namespace Weliton\TwigSlim\Traits;

trait View
{
    protected $twig;

    protected function twig():void
    {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../view');
        $this->twig = new \Twig\Environment($loader, [
        //  'cache' => '/path/to/compilation_cache',
        'debug' => true
        ]);

    }

    protected function functions():void
    {

    }

    protected function load():void
    {
        $this->twig();
        $this->functions();
    }

    protected function view(string $view, array $data):void
    {
         $this->load();
        
        echo $this->twig->render($view.'.html', $data);
    }

}