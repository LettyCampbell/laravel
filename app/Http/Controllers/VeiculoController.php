<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    function formulario(){
        return view('veiculo-formulario');
    }

    function store(Request $dados){
        $veiculo = new VeiculoModel();
        $veiculo->create($dados->all());
    }

    function list(){
        $veiculos = VeiculoModel::all()->toArray();

        return view('veiculo-listar', ['clientes' => $veiculos]);
    }

    function remove($id){
        ClienteModel::destroy($id);
        return redirect()->route('cliente-listar');
    }

    function editar(){

    }
}


