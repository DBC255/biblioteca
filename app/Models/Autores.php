<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nome_autor',
        'data_nascimento',
        'nascionalidade'
    ]; 
}
