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
        $servicos = Servico::all();
        return view('admin.servicos.index', compact('servicos'));
    }

    public function adicionar()
    {
        return view('admin.servicos.adicionar');
    }

    public function salvar(Request $req)
    {
        $servico = new Servico;
        $imagemSalva = null;

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir ="img/servicos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $imagemSalva = $dir . $nomeImagem;
        }

        $servico->titulo = $req->titulo;
        $servico->descricao = $req->descricao;
        $servico->valor = $req->valor;
        $servico->publicado = $req->publicado ? true : false;
        $servico->imagem = $imagemSalva;


        if($servico->save()){
            return redirect()->route('admin.servicos');
        }
    }

     public function editar($id)
     {
        $servico = Servico::find($id);

        return view('admin.servicos.editar',compact('servico'));
     }

     public function atualizar(Request $req, $id)
     {
        $dados = $req->all();

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
