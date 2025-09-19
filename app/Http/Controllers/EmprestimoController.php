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

    public function show($id){
        $emprestimo = Emprestimo::find($id);

        if($emprestimo == null){
            return response()->json([
                'erro' => 'emprestimo não encontrado'
            ]);
        }

        return response()->json($emprestimo);
    }

    public function update(Request $request){
        $emprestimo = Emprestimo::find($request->id);

        if($emprestimo == null){
            return response()->json([
                'erro' => 'emprestimo não emcontrado'
            ]);
        }

        if(isset($request->data_emprestimo)){
            $emprestimo->data_emprestimo = $request->data_emprestimo;
        }

        if(isset($request->data_devolucao)){
            $emprestimo->data_devolucao = $request->data_devolucao;
        }

        if(isset($request->usuario_id)){
            $emprestimo->usuario_id = $request->usuario_id;
        }

        if(isset($request->livro_id)){
            $emprestimo->livro_id = $request->livro_id;
        }

        $emprestimo->update();

        return response()->json([
            'atualizado'
        ]);
    }

    public function delete($id){
        $emprestimo = Emprestimo::find($id);

        if($emprestimo == null){
            return response()->json([
                'erro' => 'emprestimo não encontrado'
            ]);
        }

        $emprestimo->delete();

        return response()->json([
            'deletado'
        ]);
    }
}
