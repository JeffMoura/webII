<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasInicialEmpresa extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
}
