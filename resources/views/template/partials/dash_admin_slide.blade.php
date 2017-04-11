 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
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
                        <ul id="demo" class="collapse">
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
                        </ul>
                    </li>

                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-bar-chart-o"></i> Reportes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="#">Visitas diarias</a>
                            </li>
                            <li>
                                <a href="#">Visitas entre Fechas</a>
                            </li>
                            <li>
                                <a href="#">Usuarios mas visitados</a>
                            </li>
                            <li>
                                <a href="#">Motivos mas frecuentes</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('parametricas.index')}}"><i class="fa fa-fw fa-file"></i> Parametrizacion</a>
                    </li>
                    
                </ul>
            </div>