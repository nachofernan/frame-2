<?php

namespace App\Controllers;

use App\Config\View;
use App\Config\Util;

class Home
{
    public function index()
    {
        $views = ['home/index'];
        $args  = [
            'title' => 'Home',
        ];
        View::render($views, $args);
    }

    public function error_404()
    {
        http_response_code(404);
        View::render(['error/404']);
    }

    public function login()
    {
        if(Util::hasAuth()) {
            header("Location: " . Util::baseUrl() . 'home');
        }

        $views = ['home/login'];
        $args  = [
            'title' => 'Ingresar',
            'js' => 'login',
        ];

        View::render($views, $args);
    }

    public function logout()
    {
        if(Util::hasAuth()) {
            session_destroy();       
        }
        header("Location: " . Util::baseUrl() . 'login'); 
    }

    public function register() {
        if(Util::hasAuth()) {
            header("Location: " . Util::baseUrl());
        }

        $views = ['home/register'];
        $args  = [
            'title' => 'Registrarse',
            'js' => 'register',
        ];

        View::render($views, $args);
    }
    
}
