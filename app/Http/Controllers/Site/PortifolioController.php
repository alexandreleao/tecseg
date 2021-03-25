<?php

namespace App\Http\Controllers\Site;
use App\Servico;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortifolioController extends Controller
{
    public function index()
    {
        $servicos = Servico::limit(3)->get();

        return view('pages.portifolio',compact('servicos'));

    }
}
