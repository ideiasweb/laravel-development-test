<?php

namespace App\Http\Controllers;

class CategoriaController extends Controller
{
    function index()
    {
        return view('categorias.index');
    }

    function adicionar()
    {
        return view('categorias.form');
    }

    function editar()
    {
        return view('categorias.form');
    }
}
