<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibController extends Controller
{
    public function home() {
        return view('site.home');
    }

    public function cadastroUsuario() {
        return view('site.cadastroUsuario');
    }

    public function lista() {
        return view('site.lista');
    }

    public function cadastroLivro() {
        return view('site.cadastroLivro');
    }

    public function editar() {
        return view('site.editar');
    }

    public function deletar() {
        return view('site.deletar');
    }
}
