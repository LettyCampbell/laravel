<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    function formulario(){
        return view('anuncio-formulario');
    }

    function store(Request $dados){
        $anuncio = new AnuncioModel();
        $anuncio->create($dados->all());
    }

    function list(){
        $anuncios = AnuncioModel::all()->toArray();

        return view('anuncio-listar', ['anuncios' => $anuncios]);
    }

    function remove($id){
        AnuncioModel::destroy($id);
        return redirect()->route('anuncio-listar');
    }

    function editar(){
        
    }
}
