<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Servico;
use Illuminate\Support\Facades\Storage;

class ServicoController extends Controller
{
    public function index()
    {
        $registros = Servico::all();
        return view('admin.servicos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.servicos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir ="img/servicos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir ."/".$nomeImagem;
        }

        Servico::create($dados);

        return redirect()->route('admin.servicos');

    }

     public function editar($id)
     {
        $registro = Servico::find($id);

        return view('admin.servicos.editar',compact('registro'));
     }

     public function atualizar(Request $req, $id)
     {
        $dados = $req->all();

        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }

        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/servicos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_" . $num . "." . $ex;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir . "/" . $nomeImagem;
        }

        Servico::find($id)->update($dados);
        return redirect()->route('admin.servicos');
         }  

        public function deletar($id)
        {
            Servico::find($id)->delete();
            return redirect()->route('admin.servicos');
        }
}
