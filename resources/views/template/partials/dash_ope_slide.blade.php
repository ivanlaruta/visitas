 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li>
                        <a href="{{ route('visitas.create')}}"><i class="fa fa-sign-out"></i> Registrar nueva visita</a>
                    </li>
                    <li >
                        <a href="{{ route('visitas.index')}}"><i class="fa fa-table"></i> Visitas en curso</a>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-bar-chart-o"></i> Reportes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse in">
                            <li>
                                <a href="{{ route('reportes.visitasDiarias')}}">Visitas diarias</a>
                            </li>
                            <li>
                                 <a href="{{ route('reportes.visitasEntreFechas')}}">Visitas por fechas</a>
                            </li>
                            <li>
                                <a href="{{ route('reportes.visitasTodo')}}">Todas las visitas</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>