<?php

session_start();

use App\Kernel;

require_once __DIR__.'/../vendor/autoload.php';

$kernel = new Kernel();
$kernel->handleRequest();
