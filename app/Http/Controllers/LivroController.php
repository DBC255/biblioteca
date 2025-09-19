<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function save(Request $request){
        $livro = Livro::create([
            "titulo" => $request->titulo,
            "ano_de_publicacao" => $request->ano_de_publicacao,
            "genero" => $request->genero,
            "autor_id" => $request->autor_id
        ]);

        return response()->json($livro);
    }
    
    public function index(){
        $livros = Livro::all();

        return response()->json($livros);
    }

    public function show($id){
        $livro = Livro::find($id);

        if($livro == null){
            return response()->json([
                'erro' => 'livro não encontrado'
            ]);
        }

        return response()->json($livro);
    }

    public function update(Request $request){
        $livro = Livro::find($request->id);

        if($livro == null){
            return response()->json([
                'erro' => 'livro não emcontrado'
            ]);
        }

        if(isset($request->titulo)){
            $livro->titulo = $request->titulo;
        }

        if(isset($request->ano_publicacao)){
            $livro->ano_de_publicacao = $request->ano_de_publicacao;
        }

        if(isset($request->autor_id)){
            $livro->autor_id = $request->autor_id;
        }

        if(isset($request->genero)){
            $livro->genero = $request->genero;
        }

        $livro->update();

        return response()->json([
            'Atualizado'
        ]);
    }

    public function delete($id){
        $livro = Livro::find($id);

        if($livro == null){
            return response()->json([
                'erro' => 'livro não encontrado'
            ]);
        }

        $livro->delete();

        return response()->json([
            'deletado'
        ]);
    }
}
