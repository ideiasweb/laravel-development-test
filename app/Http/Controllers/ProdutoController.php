<?php

namespace App\Http\Controllers;

class ProdutoController extends Controller
{
    function index()
    {
        return view('produtos.index');
    }

    function adicionar()
    {
        return view('produtos.form');
    }

    function editar()
    {
        return view('produtos.form');
    }
}
