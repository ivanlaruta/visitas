				        <div class="panel panel-primary">
                            <div class="panel-heading">

                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> 
                                @yield('ventana','algo') 
                                | {{ Auth::user()->empleado->ubicacion->nombre }} | 
								<?php $time = time();
								echo date("d-m-Y ", $time);?>
                            </div>
                            <div class="panel-body">
                                


    