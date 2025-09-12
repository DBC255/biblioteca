<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_emprestimo',
        'data_devolucao',
        'usuario_id',
        'livro_id'
    ];
}
