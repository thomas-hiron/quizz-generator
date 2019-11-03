<?php

namespace App\Controller;

class Home extends AbstractController
{
    public function index(): void
    {
        $this->render('home/index.html.twig');
    }
}
