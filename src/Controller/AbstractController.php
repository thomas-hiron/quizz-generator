<?php

namespace App\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class AbstractController
{
    protected function render(string $template, array $params = [])
    {
        $loader = new FilesystemLoader(__DIR__.'/../../templates');
        $twig = new Environment($loader);

        echo $twig->render($template, $params);
    }
}
