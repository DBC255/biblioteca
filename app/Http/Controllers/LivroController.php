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
}
