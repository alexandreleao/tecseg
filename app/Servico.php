<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable =[
        'titulo', 'descricao', 'valor', 'imagem', 'publicado'
    ];



}
