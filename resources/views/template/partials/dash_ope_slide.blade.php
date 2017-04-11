 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{ route('visitas.index')}}"><i class="fa fa-table"></i> Visitas en curso</a>
                    </li>
                    <li>
                        <a href="{{ route('visitas.create')}}"><i class="fa fa-sign-out"></i> Registrar nueva visita</a>
                    </li>
                    

                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-bar-chart-o"></i> Reportes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="{{ route('reportes.index')}}">Visitas diarias</a>
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

                    
                </ul>
            </div>