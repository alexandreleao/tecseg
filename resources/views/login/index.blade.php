 @extends('layout.tecseg', ['titulo' => 'Página de Login'])

@section('content')
<div class="container">
        <h3 class="center">Entrar</h3>
        <div class="row">
        <form class="" action="{{route('site.login.entrar')}}" method="post" >
            {{ csrf_field() }}

            <div class="input-field">
                <label>E-mail</label>
                <input type="text" name="email" value="{{ old('email') }}">
            </div>
            <div class="input-field">
                <label>Senha</label>
                <input type="password" name="password" {{ old('password') }}>
            </div>

            <button class="btn blue darken-3">Entrar</button>
        </form>
    </div>
    <div class="row">
        @include('componentes.erros', ['errors' => $errors])
    </div>
    <div class="row">
        <a href="{{ route('site.cadastro') }}">Cadastre-se</a>
    </div>
</div>

  @endsection
