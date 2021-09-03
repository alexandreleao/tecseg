<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable =[
        'titulo', 'descricao', 'valor', 'imagem', 'publicado'
    ];


    public function setPublicadoAttribute($value)
    {
        $this->attributes['publicado'] = $value == 'on' ? true : false;
    }
}
