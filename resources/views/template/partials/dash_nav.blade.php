       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SISTEMA DE VISITAS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="" > <i class="fa fa-globe"></i>  {{ Auth::user()->empleado->ubicacion->nombre }}<b class=""></b></a>
                    {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Usuario:  
                                    Tipo Usuario:{{ Auth::user()->id_rol }}<span class="caret"></span>
                    </a> --}}
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->empleado->nombre }} {{ Auth::user()->empleado->paterno }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    
                        <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i>
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

            @if (Auth::guest())

            
            @else               
                         @if(Auth::user()->id_rol==1 )
                            @include('template.partials.dash_admin_slide')
                            
                        
                        @else                       
                            @include('template.partials.dash_ope_slide')
                        @endif      
        @endif
           
            <!-- /.navbar-collapse -->
        </nav>