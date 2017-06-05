<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('home')}}">Odonto</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
    @if(Auth::user() != null)
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pacientes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('customers.index')}}">Listar</a></li>
            <li><a href="{{route('customers.create')}}">Crear</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Horario<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('hours.index')}}">Listar</a></li>
            <li><a href="{{route('hours.create')}}">Crear</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuentas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('accounts.index')}}">Estado de cuenta</a></li>
          </ul>
        </li>

      @if(Auth::user()->type == 'admin')
        <li><a href="{{route('administrador')}}">Administrador</a></li>
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
    @else
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="{{route('administrador')}}">Login</a>
        </li>
      </ul>
    @endif


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>