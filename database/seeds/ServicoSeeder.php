<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Servico;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicos = [
            [
                'dono_id' => User::inRandomOrder()->get()->first()->id,
                'titulo'=> "Cerca de segurança",
                'descricao'=>"Descrição da cerca",
                'imagem'=> "/img/servicos/imagem_1301.png",
                'valor' => 20,
                'publicado' => true
            ],
            [
                'dono_id' => User::inRandomOrder()->get()->first()->id,
                'titulo'=> "Serviço de manutenção",
                'descricao'=>"Descrição do serviço de manutenção",
                'imagem'=> "/img/servicos/imagem_1397.png",
                'valor' =>15.0,
                'publicado' => true
            ],
            [
                'dono_id' => User::inRandomOrder()->get()->first()->id,
                'titulo'=> "Proteção de chapas",
                'descricao'=>"Descrição de proteção de chapas",
                'imagem'=> "/img/servicos/imagem_1420.png",
                'valor' => 11.3,
                'publicado' => true
            ],
            [
                'dono_id' => User::inRandomOrder()->get()->first()->id,
                'titulo'=> "Instalação de Câmeras",
                'descricao'=>"Descrição de qualquer coisa",
                'imagem'=> "/img/servicos/imagem_1397.png",
                'valor' => 10.5,
                'publicado' => true
            ]
        ];

        foreach($servicos as $servico){
            Servico::create($servico);
        }
    }
}
