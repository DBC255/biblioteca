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
}
