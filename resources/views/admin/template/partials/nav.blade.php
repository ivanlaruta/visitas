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
            <li><a href="{{ route('empleados.index')}}">Empleados</a></li>
            <li><a href="{{ route('visitantes.index')}}">Visitantes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('cargos.index')}}">Cargos</a></li>
            <li><a href="{{ route('tarjetas.index')}}">Tarjetas</a></li>
            <li><a href="{{ route('ubicaciones.index')}}">Ubicaciones</a></li>
            
           
          </ul>
        </li>


      </ul>

       <ul class="nav navbar-nav">
        
          
        
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parametrizaciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li><a href="{{ route('motivos.index')}}">Motivos</a></li>
            <li><a href="">Expendidos</a></li>
            <li><a href="">Estados</a></li>
            <li><a href="">Tipos de documentos</a></li>
            <li><a href="#">Ciudades</a></li>
            <li><a href="#">Roles</a></li>
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
                                    Usuario:{{ Auth::user()->empleado->nombre }} {{ Auth::user()->empleado->paterno }} | Ubicacion:{{ Auth::user()->empleado->ubicacion->nombre }}
                                    <span class="caret"></span>
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