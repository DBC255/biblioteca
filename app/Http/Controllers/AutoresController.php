<?php

namespace App\Http\Controllers;

use App\Models\Autores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    public function save(Request $request){
        $autor = Autores::create ([
            "nome_autor" => $request->nome_autor,
            "data_nascimento" => $request->data_nascimento,
            "nascionalidade" => $request->nascionalidade
        ]);
        return response()->json($autor);
    }

    public function index(){
        $autores = Autores::all();
        return response()->json($autores);
    }

    public function show($id){
        $autor = Autores::find($id);

        if($autor == null){
            return response()->json([
                'erro' => 'autor não encontrado'
            ]);
        }

        return response()->json($autor);
    }

    public function update(Request $request){
        $autor = Autores::find($request->id);

        if($autor == null){
            return response()->json([
                'erro' => 'autor não emcontrado'
            ]);
        }

        if(isset($request->nome_autor)){
            $autor->nome_autor = $request->nome_autor;
        }

        if(isset($request->data_nascimento)){
            $autor->data_nascimento = $request->data_nascimento;
        }

        if(isset($request->nascionalidade)){
            $autor->nascionalidade = $request->nascionalidade;
        }

        $autor->update();

        return response()->json([
            'atualizado'
        ]);
    }

    public function delete($id){
        $autor = Autores::find($id);

        if($autor == null){
            return response()->json([
                'erro' => 'autor não encontrado'
            ]);
        }

        $autor->delete();

        return response()->json([
            'deletado'
        ]);
    }
}
