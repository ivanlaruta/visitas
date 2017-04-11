 <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Inicio</span> Sistema de visitas
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->


           

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Sobre es sistema</a>
                    </li>

                     <li>
                        <a class="page-scroll" href="#">|</a>
                    </li>
                   {{--  <li>
                        <a class="page-scroll" href="#about">Funcionamiento</a>
                    </li> --}}
                    <li>
                     @if (Auth::guest())
                            <li><a class="page-scroll" href="{{ route('login') }}">Ingreso</a></li>
                     {{-- @else
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
                            </li> --}}
                        @endif

                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>