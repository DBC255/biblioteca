<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function save(Request $request){
        $usuario = Usuario::create([
        "nome_usuario" => $request->nome_usuario,
        "endereco" => $request->endereco,
        "telefone" => $request->telefone,
        "data_cadastro" => $request->data_cadastro
        ]);

        return response()->json($usuario);
    }

    public function index(){
        $usuarios = Usuario::all();

        return response()->json($usuarios);
    }

}
