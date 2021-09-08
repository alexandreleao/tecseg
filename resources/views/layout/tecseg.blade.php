
<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->

    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <style>
      @font-face {
      font-family: 'Material Icons';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/materialicons/v99/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
    }

    .material-icons {
      font-family: 'Material Icons';
      font-weight: normal;
      font-style: normal;
      font-size: 24px;
      line-height: 1;
      letter-spacing: normal;
      text-transform: none;
      display: inline-block;
      white-space: nowrap;
      word-wrap: normal;
      direction: ltr;
      -webkit-font-feature-settings: 'liga';
      -webkit-font-smoothing: antialiased;
    }
    
    </style>
    <link rel="stylesheet" href="/css/materialize.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

@include('componentes.menu')

@yield('content')

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/meterialize.js"></script>
<script type="text/javascript" src="/js/vue-next.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $(".button-collapse").sideNav();
    $('.carousel').carousel();
  });
</script>

@yield('js')

</body>
</html>
