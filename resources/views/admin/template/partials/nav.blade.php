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
      {{-- <a class="navbar-brand" href="#">Inicio</a> --}}
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
              
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">A</a></li>
            <li><a href="#">B</a></li>
            <li><a href="#">C</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="#">reportes Administracion</a></li>
          </ul>
        </li>
      </ul>


      <ul class="nav navbar-nav">
        
          
        
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administracion <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('users.index')}}">Usuarios</a></li>
            <li><a href="#">Motivos</a></li>
            <li><a href="{{ route('cargos.index')}}">Cargos</a></li>
            <li><a href="#">Tarjetas</a></li>
            <li><a href="#">Ubicaciones</a></li>
            <li><a href="#">Empleados</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="#">reportes Administracion</a></li>
          </ul>
        </li>


      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
{{--           <input type="text" class="form-control" placeholder="Search">
 --}}        </div>
{{--         <button type="submit" class="btn btn-default">Buscar</button>
 --}}      </form>

      <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Usuario:{{ Auth::user()->empleado->nombre }} {{ Auth::user()->empleado->paterno }}  Ubicacion:{{ Auth::user()->empleado->ubicacion->nombre }}
                                    Tipo Usuario:{{ Auth::user()->id_rol }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesion.
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>