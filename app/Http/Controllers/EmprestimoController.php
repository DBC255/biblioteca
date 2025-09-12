<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    public function save(Request $request){
        $emprestimo = Emprestimo::create([
            "data_emprestimo" => $request->data_emprestimo,
            "data_devolucao" => $request->data_devolucao,
            "usuario_id" => $request->usuario_id,
            "livro_id" => $request->livro_id
        ]);

        return response()->json($emprestimo);
    }

    public function index(){
        $emprestimos = Emprestimo::all();
        return response()->json($emprestimos);
    }
}
