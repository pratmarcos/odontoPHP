<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('administrador')}}">Odonto</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{route('home')}}">Dentista</a></li>

        @if(Auth::user()->type == 'admin')
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('users.index')}}">Listar</a></li>
            <li><a href="{{route('users.create')}}">Crear</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tratamientos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('groupstreatments.index')}}">Listar tipos</a></li>
            <li><a href="{{route('groupstreatments.create')}}">Crear tipo</a></li>
            <li><a href="{{route('treatments.index')}}">Listar tratamientos</a></li>
            <li><a href="{{route('treatments.create')}}">Crear tratamiento</a></li>
          </ul>
        </li>

        @endif

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{!!Auth::user()->name!!}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('logout')}}">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
