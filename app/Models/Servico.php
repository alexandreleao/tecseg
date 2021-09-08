<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Servico extends Model
{
    protected $fillable =[
        'dono_id', 'titulo', 'descricao', 'valor', 'imagem', 'publicado'
    ];


    public function setPublicadoAttribute($value)
    {
        $this->attributes['publicado'] = $value == 'on' ? true : false;
    }

    public function dono()
    {
        return $this->belongsTo(User::class, 'dono_id', 'id')->select('name', 'id');
    }
}
