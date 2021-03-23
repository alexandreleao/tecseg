<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }


    public function entrar(Request $req)
    {
        $entrar = $req->all();

        if(Auth::attempt(['email'=>$entrar['email'],'password'=>$entrar['senha']])){
            
            return redirect()->route('admin.servicos'); 
        }

        return redirect()->route('login.index');
    }

    public function sair()
    {
       Auth::logout();
      return redirect()->route('site.home');
    }
}
