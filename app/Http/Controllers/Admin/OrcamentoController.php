<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Orcamento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\SaveFile;

class OrcamentoController extends Controller
{
    use SaveFile;

    public function getOrcamento($id)
    {
        $orcamento = Orcamento::findOrFail($id);

        return view('pages.orcamento', [
            'orcamento' => $orcamento
        ]);
    }
}
