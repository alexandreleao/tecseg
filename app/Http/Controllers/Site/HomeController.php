<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servico;

class HomeController extends Controller
{
    public function index()
    {
        $servicos = Servico::limit(3)->get(); // select * from servicos limit 3

        return view('pages.home',compact('servicos'));
    }
}
