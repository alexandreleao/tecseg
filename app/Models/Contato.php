<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
   protected $fillable = [
     'nome',
     'telefone',
     'email',
     'endereco',
     'cep',
     'cidade',
     'estado'
   ];
}
