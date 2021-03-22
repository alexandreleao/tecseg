<?php

namespace App\Http\Controllers\Site;
use App\Servico;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortifolioController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();

        return view('pages.portifolio',compact('servicos'));

    }
}
