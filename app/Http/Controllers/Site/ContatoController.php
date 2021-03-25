<?php

namespace App\Http\Controllers\Site;
use App\Contato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContatoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{

    public function index()
    {
        $contato = Contato::all();

        return view('pages.contato',compact('contato'));

    }

    public function adicionar()
    {
        return view('site.contato.adicionar');
    }


    public function salvar(Request $request)
    {

      $validator = Validator::make($request->all(), $this->configContatoRules());
      if($validator->fails()){
          return redirect()->back()->withErrors($validator->errors())->withInput();
      }

      $credenciais = $request->only([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'endereco' => 'required',
            'cep' => 'required',
            'cidade' => 'required',
            'Estado' => 'required'
        ]);

        if (Auth::attempt($credenciais)) {
            return redirect()->route('admin.servicos');
        }

        return redirect()->back()->withErrors([
            'message' => 'Não foi possível cadastrar contato!'
        ]);

       $dados = $request->all();

       Contato::create($dados);

       return redirect()->route('admin.servicos');

    }

    public function configContatoRules()
    {
        return [
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'endereco' => 'required',
            'cep' => 'required',
            'cidade' => 'required',
            'Estado' => 'required'
        ];
    }
}
