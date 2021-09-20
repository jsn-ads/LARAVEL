<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    //o atributo table sobrepoem a nomeação automatica do eloquent

    protected $table = 'fornecedores';
}
