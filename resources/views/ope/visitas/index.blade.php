@extends('template.dashboard')
@section('title','Lista de visitas')
@section('content')
@section('ventana','Lista de visitas en curso')	



			{{-- <div>
				<div class="row">
  					<div class="col-md-8">
						{!! Form::open (['route' => 'visitas.index','method' => 'GET','class' => 'navbar-form pull-left'])!!}
							<div class ="input-group">	
								{!! Form::text('ci',$recuperado -> ci,['class'=> 'form-control','placeholder'=>'Ingrese Nro de documento','aria-describedby'=>'seacrch'])!!}
								<span class="input-group-addon" id="seach">

								<span class="glyphicon glyphicon-search" aria-hidden="true">
						       		 
						      </span>
						      </span>
							</div>
						{!! Form::close()!!}
					</div>
					<div class="col-md-4">
						<a href="{{ route('visitas.create')}}" class="btn btn-success">Registrar nueva Entrada</a>
					</div>
				</div>
			</div> --}}
			<div class="row">
				
				 <div class="table-responsive">
                    <table width="100%" class="table table-hover table-striped mitabla" id="todo">
                    
					<thead>
						{{-- <th>ID</th> --}}
						<th>Numero</th>
						<th>Ex</th>
						<th>Tipo</th>
						<th>Visitante</th>
						<th>Telefono</th>
						<th>Entrada</th> 
						<th>Hora</th>
						<th>Motivo</th>
						<th>Vistado</th>
						{{-- <th>Cargo</th> --}}
						<th>Tarjeta</th>
						{{-- <th>Tipo tarjeta</th> --}}
						{{-- <th>Ubicacion</th> --}}
						<th>Observacion</th>
						<th>Accion</th>
					<tbody>
						<?php $hoy=date("Y-m-d"); ?>
						@foreach($vi as $vis)
							
							@if($vis -> estado_visita === '2')
									<tr class="danger">
							@else
								@if($vis -> estado_visita === '3')
									<tr class="info">
								@else
									@if($vis -> fecha_entrada < $hoy)
										<tr class="warning">
									@endif
								@endif
							@endif
								{{-- <td>{{ date('d-m-Y', strtotime($vis -> fecha_entrada))}}</td> --}}

								{{-- <td>{{ $vis-> id_visita }}</td> --}}
							
								<td>{{ $vis -> ci_visitante }}</td>
								<td>{{ $vis -> visitante -> ex}}</td>
								<td>{{ $vis -> tipo_doc }}</td>
								<td>{{ $vis -> visitante -> nombre }}  {{ $vis -> visitante -> paterno }}  {{ $vis -> visitante -> materno }}</td>
								<td>{{ $vis -> visitante -> telefono }}</td>
								<td>{{ date('d-m-Y', strtotime($vis -> fecha_entrada)) }}
								<td><span class="text-danger">{{ $vis -> hora_entrada }}</span></td>
								<td>{{ $vis -> motivo -> descripcion}}</td>
								<td>{{ $vis -> empleado -> nombre }}  {{ $vis -> empleado -> paterno }}</td>
								{{-- <td>{{ $vis -> empleado -> cargo -> descripcion }} </td> --}}
								<td><span class="text-info">{{ $vis -> id_tarjeta }}</td>
								{{-- <td>{{ $vis -> tarjeta -> tipo_tarjeta }} </td> --}}
								{{-- <td>{{ $vis -> ubicacion -> nombre}}</td> --}}
								<td>{{ $vis -> observaciones }}</td>
								<td>
								@if($vis -> estado_visita === '2')
									Deshabilitado!
								@else
									@if($vis -> estado_visita === '3')
										<div class="row">
										
										<a href="{{ route('visitas.restaurar',$vis -> id_visita )}}"  class="btn btn-success btn-sm" title="">Devolucion</a>
										</div>
									@else
										<div class="row">
										<div class="col-md-6">
										<a href="{{ route('visitas.salida',$vis -> id_visita )}}" onclick ="return confirm('¿Desea Marcar la Salida de este visitante ?')" class="btn btn-warning btn-sm" title="Marcar salida de visita">Salir</a>
										</div>
										<div class="col-md-6">
										@if($vis -> fecha_entrada < $hoy)
											<a href="{{ route('visitas.reportar',$vis -> id_visita )}}" onclick ="return confirm('La visita se marcara como reportada.¿Desea continuar?')" class="btn btn-danger btn-sm" title="Reportar tarjeta"> <span class="glyphicon glyphicon-exclamation-sign"></span></a>
										@endif
									@endif
								@endif

									</div>
									</div>
									 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				</div>
				{{ $vi->links() }} 
		</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        
        $('#todo').DataTable({
            
            responsive: true

        });
    });
</script> 
@endsection