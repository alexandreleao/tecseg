<nav>
    <div class="nav-wrapper blue darken-3" style="padding-left: 15px;">
        <a href="{{ route('site.home') }}" class="brand-logo">
             <img height="40%" width="40%" src="{{ asset('img/servicos/logotecseg.png') }}">
        </a>
        <a href="{{ route('site.home') }}" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down" style="padding-right: 15px;">
            <li><a href="{{ route('site.home') }}">Home</a></li>
            @if(Auth::guest())
             <li><a href="{{ route('site.login') }}">Login</a></li>
            @else
             <li><a href="{{ route('admin.servicos') }}">Serviços</a></li>
             <li><a href="#">{{Auth::user()->name}}</a></li>
            @endif
            <li><a href="{{ route('site.portifolio') }}">Portifólio</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
            @auth()
            <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
            @endauth
        </ul>
        <ul class="side-nav" id="mobile">
            <li><a href="{{ route('site.home') }}">Home</a></li>
             @if(Auth::guest())
             <li><a href="{{ route('site.login') }}">Login</a></li>
             @else
             <li><a href="{{ route('admin.servicos') }}">Serviços</a></li>
             <li><a href="#">{{Auth::user()->name}}</a></li>
             @endif
            <li><a href="{{ route('site.portifolio') }}">Portifólio</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
            @auth()
            <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
            @endauth
        </ul>
    </div>
</nav>
