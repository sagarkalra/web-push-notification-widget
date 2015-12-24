<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PushFlix - Holy grail of notifications</title>

    @if ( Config::get('app.debug') )
        <link rel="stylesheet" href="/css/final.css" />
    @else 
        <link href="{{ elixir('css/final.css') }}" rel="stylesheet" type="text/css">
    @endif
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

  <div class="wrapper">
    <header>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        @include('partials.menu')
      </nav>
    </header>

    <div class="container">
      @yield('content')  
    </div>

    <footer class="footer navbar-fixed-bottom">
        
    </footer>

    <!-- Scripts -->
    @if ( Config::get('app.debug') )
      <script src="/js/app.js"></script>
    @else 
      <script src="{{ elixir("js/app.js") }}"></script>
    @endif
  </div>
</body>
</html>