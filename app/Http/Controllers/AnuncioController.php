<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\anuncioModel;

class AnuncioController extends Controller
{
    function formulario(){
        return view('anuncio-formulario');
    }

    function store(Request $dados){
        if ($dados->id == '') {
            //fazemos ação de create aqui...
            $anuncio = new AnuncioModel();
            $anuncio->create($dados->all());
        } else {
            //fazemos a ação de update aqui
            $anuncio = anuncioModel::find($dados->id); //localiza o registro
            $update = $anuncio->update($dados->all()); //atualiza
        }
        
        //recupera todos os registros atualizados
        $anuncios = AnuncioModel::all();
        
        //após adicionar ou editar redireciona para a página listar
        return view('anuncio-listar', ['anuncios'=>$anuncios]);
    }

    function list(){
        $anuncios = AnuncioModel::all();

        return view('anuncio-listar', ['anuncios' => $anuncios]);
    }

    function remove($id){
        AnuncioModel::destroy($id);
        return redirect()->route('anuncio-listar');
    }

    function editar($id){
        $anuncio = AnuncioModel::find($id);

        return view('anuncio-formulario', ['anuncio' => $anuncio]);

}
}
