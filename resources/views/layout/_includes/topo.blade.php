<!DOCTYPE html>
<html>
<head>
<title> @yield('titulo')</title>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
      
<body>
  <header>
      <nav>
    <div class="nav-wrapper blue darken-3">
      <a href="#!" class="brand-logo">Tecseg</a>
      <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        <li><a href="{{route('admin.servicos')}}">Serviços</a></li>
        <li><a href="{{route('site.portifolio')}}">Portifólio</a></li>
        <li><a href="{{route('site.contato')}}">Contato</a></li>
      </ul>
      <ul class="side-nav" id="mobile">
        <li><a href="sass.html">Home</a></li>
        <li><a href="{{route('admin.servicos')}}">Serviços</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>          
 </header>
        