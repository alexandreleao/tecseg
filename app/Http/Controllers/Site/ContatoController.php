<?php

namespace App\Http\Controllers\Site;
use App\Contato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller
{

    public function index()
    {  
        $contato = Contato::all();

        return view('contato',compact('contato'));
        
    }

    public function adicionar()
    {
        return view('site.contato.adicionar');
    }


    public function salvar(Request $request)
    {
       $dados = $request->all();

       Contato::create($dados);

       return redirect()->route('admin.servicos');

    }
}
