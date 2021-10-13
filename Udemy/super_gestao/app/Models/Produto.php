<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome','descricao','peso','id_unidade'];

    //retorna dados de produtos detalhes contido em produto pela FK , 1 para 1
    public function produtoDetalhe(){
        return $this->hasOne('App\Models\ProdutoDetalhe');
    }

    //retorna o fornecedor que o produto pertece , filho para pai
    public function fornecedor(){
        return $this->belongsTo('App\Models\Fornecedor', 'id_fornecedor', 'id');
    }
}
