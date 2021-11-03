<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = ['nome','imagem'];

    // regras de validação
    public function rules(){
        return [
            'nome'    => 'required|unique:marcas',
            'imagem'  => 'required'
        ];
    }

    // reposta de retorno
    public function feedback(){
        return [
            'required'    => 'o campo :attribute e obrigatório',
            'nome.unique' => 'este nome ja esta sendo utilizado'
        ];
    }
}
