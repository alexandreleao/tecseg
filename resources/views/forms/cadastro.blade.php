@extends('layout.tecseg', ['titulo' => 'Cadastro de Usuário'])

@section('content')
<div class="container">
    <h3 class="center">Cadastre-se</h3>
    <div class="row">
        <form class="" action="{{route('site.novo.usuario')}}" method="post" >
            {{ csrf_field() }}
            <div class="input-field">
                <label>Nome</label>
                <input type="text" name="name" value="{{old('name')}}">
            </div>
            <div class="input-field">
                <label>E-mail</label>
                <input type="text" name="email" value="{{old('email')}}">
            </div>
            <div class="input-field">
                <label>Senha</label>
                <input type="password" name="password" value="{{old('password')}}">
            </div>
            <div class="input-field">
                <label>Repita a senha</label>
                <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}">
            </div>

            <button type="submit" class="btn blue darken-3" >Enviar</button>
        </form>
    </div>
    @include('componentes.erros', ['errors' => $errors])
</div>
@endsection
