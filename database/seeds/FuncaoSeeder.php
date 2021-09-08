<?php

use Illuminate\Database\Seeder;

class FuncaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Funcao::create(['nome'=> 'Administrador']);
        \App\Models\Funcao::create(['nome'=> 'Cliente']);
        \App\Models\Funcao::create(['nome'=> 'Empregado']);
    }
}
