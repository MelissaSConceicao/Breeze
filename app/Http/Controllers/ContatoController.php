<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        //var_dump : mostra o conteúdo de uma variável, seja simples, objeto ou array
        var_dump($_POST);
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
