<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orcamento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrcamentoController extends Controller
{
    public function listarOrcamentos()
    {
        $orcamentos = Orcamento::paginate(5);

        return view('pages.orcamento');
    }    


    public function getOrcamento($id)
    {
        $orcamento = Orcamento::findOrFail($id);

        return view('pages.orcamento', [
            'orcamento' => $orcamento
        ]);
    }

    public function formularioCliente()
    {
        return view('pages.orcamento');
    }

    public function store(Request $request)
    {
        /*validações*/

        $orcamento = new orcamento;
        $orcamento->nomeCliente = $request->nomeCliente;
        $orcamento->enderecoCliente = $request->enderecoCliente;
        $orcamento->telefone = $request->telefone;
        $orcamento->qtdd = $request->qtdd;
        $orcamento->descricao = $request->descricao;
        $orcamento->valor = $request->valor;
        $orcamento->valorTotal = $request->valorTotal;

        $orcamento->save();
    }
}
