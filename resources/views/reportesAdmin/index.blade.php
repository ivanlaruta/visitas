@extends('template.dashboard')


@section('content')
@section('ventana','Reportes')
        
            <div class="container-fluid">



              <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                        {!! Form::open(['route' => 'reportes.repAdmin','method' => 'GET'])!!}
                        
                            <div class="col-lg-10">
                            {!! Form::select('id_ubicacion',$ubica,$request->id_ubicacion,['class'=>'form-control','placeholder'=>' TODAS LAS UBICACIONES'])!!}
                             </div> 
                            <div class="col-lg-2">
                            {!! Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
                             </div> 
                        {!! Form::close()!!} 
                       
                            
                            
                         </div> 
                         <hr>                
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-clock-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$regular}}</div>
                                        <div>Visitas Regulares</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('visitas.AdminVisitasRegulares',$request -> id_ubicacion )}}">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalle</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-lock fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$reportada}}</div>
                                        <div>Visitas reportadas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('visitas.AdminVisitasReportadas',$request -> id_ubicacion )}}">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalle</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$regularizada}}</div>
                                        <div>Visitas regularizadas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('visitas.AdminVisitasRegularizadas',$request -> id_ubicacion )}}">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalle</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa  fa-th-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$todo}}</div>
                                        <div>Todas las visitas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('visitas.visitasTodoAdmin',$request -> id_ubicacion )}}">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalle</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
               {{--  <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- /.row -->

                <div class="row">
                <hr>
                  <div class="col-lg-4">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Empleados mas visitados</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    @foreach($emp_rank as $emp)
                                        <a class="list-group-item">
                                        <span class="badge">{{ $emp-> visitas }}</span>
                                        {{ $emp-> nombre }} {{ $emp-> paterno }}
                                        </a>
                                    @endforeach
                                    
                                </div>
                               {{--  <div class="text-right">
                                    <a href="#">Ver detalle <i class="fa fa-arrow-circle-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Motivos mas Frecuentes</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    @foreach($mot_rank as $mot)
                                        <a class="list-group-item">
                                        <span class="badge">{{ $mot-> visitas }}</span>
                                        {{ $mot-> descripcion }}
                                        </a>
                                    @endforeach                                
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Visitantes mas frecuentes</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    @foreach($vis_rank as $vis)
                                        <a class="list-group-item">
                                        <span class="badge">{{ $vis-> visitas }}</span>
                                        {{ $vis-> nombre }} {{ $vis-> paterno }}
                                        </a>
                                    @endforeach                              
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

       
@endsection
