@extends('template.dashboard')
@section('title','Lista de visitas')
@section('content')
@section('ventana','Visitas de todas las Visitas')	


                   
                            <table width="100%" class="table table-hover table-striped" id="dataTables-example">
                                <thead>
                                    <tr>
	                                    <th>Documento</th>
										<th>Ex</th>
										<th>Doc</th>
										<th>Visitante</th>
										<th>Fecha Entrada</th>
										<th>Fecha Salida</th>
										<th>Motivo</th>
										<th>Vistado</th>
										<th>Tarjeta</th>
										<th>Obs</th>
				 						<th>estado</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    
									@foreach($vi as $vis)
										@if($vis -> fecha_entrada < $vis -> fecha_salida)
												<tr class="warning">
										@else
											@if(is_null($vis -> hora_salida))
												<tr class="danger">
											@else
												<tr class="success">	
											@endif
										@endif
										
										
										
										<td>{{ $vis -> ci_visitante }}</td>
										<td>{{ $vis -> visitante -> ex}}</td>
										<td>{{ $vis -> tipo_doc }}</td>
										<td>{{ $vis -> visitante -> nombre }}  {{ $vis -> visitante -> paterno }}
										<td><span class="text-success">{{ date('d-m-Y', strtotime($vis -> fecha_entrada ))}} {{ $vis -> hora_entrada }}</span></td>	
										@if(is_null($vis -> hora_salida))
											<td>-- : -- : --</td>
										@else
											<td><span class="text-danger">{{ date('d-m-Y', strtotime($vis -> fecha_salida)) }} {{ $vis -> hora_salida }}</span></td>
										@endif	

										<td>{{ $vis -> motivo -> descripcion}}</td>
										<td>{{ $vis -> empleado -> nombre }}  {{ $vis -> empleado -> paterno }}
										<td><span class="text-info">{{ $vis -> id_tarjeta }}</td>
										<td>{{ $vis -> observaciones }}</td>
										@if(is_null($vis -> hora_salida))
											<td><span class="text-warning">Observado</span></td>
										@else
											@if(is_null($vis -> hora_salida))
												<td><span class="text-danger">En curso</span></td>
											@else
												<td><span class="text-success">Finalizado</span></td>
											@endif
										@endif
									</tr>
									@endforeach
                                </tbody>
                            </table>
                            
                      
@endsection