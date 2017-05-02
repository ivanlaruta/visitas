 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{ route('reportes.repAdmin')}}"><i class="fa fa-bar-chart-o"></i> Reportes</a>
                    </li>
                     <li>
                        <a href="{{ route('visitas.reportadas')}}"><i class="glyphicon glyphicon-exclamation-sign"></i> Regularizacion de visitas</a>
                    </li>
                    <li >
                        <a href="{{ route('users.index')}}"><i class="fa fa-user"></i> Usuarios</a>
                     </li>
                    <li>
                        <a href="{{ route('empleados.index')}}"><i class="fa fa-suitcase"></i> Empleados</a>
                    </li>
                    <li>
                        <a href="{{ route('visitantes.index')}}"><i class="fa fa-sign-out"></i> Visitantes</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-keyboard-o"></i> Administracion <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse in">
                            <li>
                                <a href="{{ route('cargos.index')}}">Cargos</a>
                            </li>
                            <li>
                                <a href="{{ route('tarjetas.index')}}">Tarjetas</a>
                            </li>
                            <li>
                                <a href="{{ route('ubicaciones.index')}}">Ubicaciones</a>
                            </li>
                            <li>
                                <a href="{{ route('motivos.index')}}">Motivos</a>
                            </li>
                            <li>
                                <a href="{{ route('parametricas.index')}}">Parametrizacion</a>
                            </li>
                        </ul>
                    </li>

                    {{-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#bajas"><i class="fa fa-bar-chart-o"></i> Bajas <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="bajas" class="collapse">
                            <li>
                                <a href="#">Usuarios</a>
                            </li>
                            <li>
                                <a href="#">Empleados</a>
                            </li>
                            <li>
                                <a href="#">Visitantes</a>
                            </li>
                            <li>
                                <a href="#">Cargos</a>
                            </li>
                            <li>
                                <a href="#">Tarjetas</a>
                            </li>
                            <li>
                                <a href="#">Ubicaciones</a>
                            </li>
                            <li>
                                <a href="#">Motivos</a>
                            </li>
                            <li>
                                <a href="#">Parametricas</a>
                            </li>
                        </ul>
                    </li> --}}
                    
                </ul>
            </div>