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
        \App\Funcao::create(['nome'=> 'Administrador']);
        \App\Funcao::create(['nome'=> 'Cliente']);
        \App\Funcao::create(['nome'=> 'Empregado']);
    }
}
