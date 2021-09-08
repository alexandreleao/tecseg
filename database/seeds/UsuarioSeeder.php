<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados= [
            'name'=>"Alexandre",
            'email'=>"admin@mail.com",
            'password'=> "123456",
            'funcao_id' => 1
        ];

        User::create($dados);

    }
}
