<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servico;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\SaveFile;

class ServicoController extends Controller
{
    use SaveFile; 

    public function index()
    {
        $servicos = Servico::all();

        return view('admin.servicos.index', compact('servicos'));
    }

    public function adicionar()
    {
        return view('forms.adicionar');
    }

    public function salvar(Request $req)
    {

        $validator = Validator::make($req->all(), $this->configServicoRules());
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $servico = new Servico;
        $servico->fill($validator->valid());
        $servico->imagem = $this->saveFile($req);
        
        if(!$servico->save()){
            return redirect()
                ->back()
                ->withErrors(['message', 'Não foi possível adicionar o serviço'])
                ->withInput();
        }

        return redirect()->route('admin.servicos');
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

    public function configServicoRules()
    {
        return [
            'titulo' => 'required',
            'descricao' => 'required',
            'valor' => 'required|integer',
            'imagemUpload' => 'required',
            'publicado' => 'required'
        ];
    }



    public function getServico($id)
    {
        $servico = Servico::findOrFail($id);

        return view('pages.servico', [
            'servico' => $servico
        ]);
    }


    public function getServicoJson($id)
    {
        $servico = Servico::with(['dono'])->findOrfail($id);


        return response()->json([
            'servico' => $servico
        ], 200);
    }


    public function getServicosJson()
    {
        $servicos = Servico::with('dono')->paginate(10);


        return response()->json([
            'servico' => $servicos
        ], 200);
    }
    public function criar(Request $req)
    {
        $validator = Validator::make($req->all(), $this->configServicoRules());
        
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'success' => false
            ], 422);
        }

        dd(Auth::id());
        
        Servico::create();

        return response()->json([]);
    }
}
