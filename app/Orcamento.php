<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable =[
        'nomeCliente ', 
        'enderecoCliente', 
        'telefone ', 
        'qtdd', 
        'descricao', 
        'valor', 
        'valorTotal',
    ];
}
