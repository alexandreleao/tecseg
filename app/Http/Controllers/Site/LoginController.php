<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CadastroRequest;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

   public function entrar(Request $req)
   {
        $validator = Validator::make($req->all(), $this->configLoginRules());
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $credenciais = $req->only(['email', 'password']);

        if(Auth::attempt($credenciais)){
                return redirect()->route('admin.servicos');
        }

        return redirect()->back()->withErrors([
            'message' => 'Não foi possível entrar'
        ]);
   }
   public function cadastro()
   {
        return view('forms.cadastro');
   }
   public function criarUsuario(CadastroRequest $req)
   {
        User::create($req->validated());

        return redirect()->route('site.login');
   }

   public function configLoginRules()
   {
       return [
            'email' => 'required',
            'password' => 'required',
       ];
   }
   public function sair()
   {
       Auth::logout();
       return redirect()->route('site.home');
   }

}
