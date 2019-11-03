<?php

namespace App;

class Kernel
{
    public function handleRequest()
    {
        $requestUri = ltrim($_SERVER['REQUEST_URI'], '/');
        $requestUriParts = explode('/', $requestUri);

        /* Instanciation du controleur */
        $controllerNameParts = explode('-', $requestUriParts[0] ?: 'home');
        $controllerName = "App\\Controller\\".implode('', array_map(function($part) {
            return ucfirst($part);
        }, $controllerNameParts));

        if (!class_exists($controllerName)) {
            http_response_code(404);

            exit;
        }

        $controller = new $controllerName();

        /* Appel de la méthode, index en fallback */
        $methodName = $requestUriParts[1] ?? 'index';
        if (!method_exists($controller, $methodName)) {
            http_response_code(404);

            exit;
        }

        call_user_func_array([$controller, $methodName], []);
    }
}
