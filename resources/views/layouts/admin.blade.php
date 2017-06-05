<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title', 'Default') | Administracion</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
  <link rel="stylesheet" href="{{ asset('css/nuestro.css')}}"> 
  <link href="https://fonts.googleapis.com/css?family=Dosis|Oswald" rel="stylesheet">
</head>
<body>
    
    @include('partials.navadmin')
    
    <div class="container mainContainer">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">@yield('title')</h3>
      </div>
      <div class="panel-body">
        @yield('content')
      </div>
    </div>
    </div>
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/dropdown.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>

        <footer>
            <div class="container" >
                <div>
                    Copyright &copy; <b>Digital DevelopmentUY</b>. Todos los derechos reservados.
                </div>
                
            </div>
        </footer>
    @yield('customJS')
</body>


</html>