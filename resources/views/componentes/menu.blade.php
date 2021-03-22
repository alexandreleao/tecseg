<nav>
    <div class="nav-wrapper blue darken-3" style="padding-left: 15px;">
        <a href="{{ route('site.home') }}" class="brand-logo">Tecseg</a>
        <a href="{{ route('site.home') }}" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down" style="padding-right: 15px;">
            <li><a href="{{ route('site.home') }}">Home</a></li>
            <li><a href="{{ route('admin.servicos') }}">Serviços</a></li>
            <li><a href="{{ route('site.portifolio') }}">Portifólio</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
        </ul>
        <ul class="side-nav" id="mobile">
            <li><a href="{{ route('site.home') }}">Home</a></li>
            <li><a href="{{ route('admin.servicos') }}">Serviços</a></li>
            <li><a href="{{ route('site.portifolio') }}">Portifólio</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
        </ul>
    </div>
</nav>
