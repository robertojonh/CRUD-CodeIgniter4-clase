<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function hola()
    {
        return view('view_hola');
    }
    public function tablas()
    {
        return view('editar-new');
    }
}
