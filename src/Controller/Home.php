<?php

namespace App\Controller;

class Home extends AbstractController
{
    public function index()
    {
        $this->render('home/index.html.twig');
    }
}
