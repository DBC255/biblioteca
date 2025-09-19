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

        public function show($id){
        $usuario = Usuario::find($id);

        if($usuario == null){
            return response()->json([
                'erro' => 'usuario não encontrado'
            ]);
        }

        return response()->json($usuario);
    }

    public function update(Request $request){
        $usuario = Usuario::find($request->id);

        if($usuario == null){
            return response()->json([
                'erro' => 'usuario não emcontrado'
            ]);
        }

        if(isset($request->nome_usuario)){
            $usuario->nome_usuario = $request->nome_usuario;
        }

        if(isset($request->data_cadastro)){
            $usuario->data_cadastro = $request->data_cadastro;
        }

        if(isset($request->endereco)){
            $usuario->endereco = $request->endereco;
        }

        if(isset($request->telefone)){
            $usuario->telefone = $request->telefone;
        }

        $usuario->update();

        return response()->json([
            'Atualizado'
        ]);
    }

    public function delete($id){
        $usuario = Usuario::find($id);

        if($usuario == null){
            return response()->json([
                'erro' => 'usuario não encontrado'
            ]);
        }

        $usuario->delete();

        return response()->json([
            'deletado'
        ]);
    }
}

