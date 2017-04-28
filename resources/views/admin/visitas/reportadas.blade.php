@extends('template.dashboard')

@section('content')
@section('ventana','Lista de visitas reportadas')	

<br><br>
		<div class="row">
			
				{{-- <div class="row">
  					<div class="col-md-12">
						{!! Form::open (['route' => 'visitas.reportadas','method' => 'GET','class' => 'navbar-form pull-left'])!!}
							<div class ="input-group">	
								{!! Form::text('ci',$recuperado -> ci,['class'=> 'form-control','placeholder'=>'Ingrese Nro de documento','aria-describedby'=>'seacrch'])!!}
								<span class="input-group-addon" id="seach">

								<span class="glyphicon glyphicon-search" aria-hidden="true">
						       
						      </span>
						      </span>
							</div>
						{!! Form::close()!!}
					</div>
				</div> --}}
				 <div class="table-responsive">
                    <table class="table table-hover table-striped">
					<thead>
						{{-- <th>ID</th> --}}
						<th>CI</th>
						<th>Ex</th>
						<th>Tipo</th>
						<th>Visitante</th>
						
						<th>Fecha Ingreso</th>
						<th>Motivo</th>
						<th>Vistado</th>
						{{-- <th>Cargo</th> --}}
						<th>Tarjeta</th>
						{{-- <th>Tipo tarjeta</th> --}}
						{{-- <th>Ubicacion</th> --}}
						<th>Telefono</th>
						<th>Observacion</th>
						<th>Usuario</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($vi as $vis)
							<tr>								
								{{-- <td>{{ $vis-> id_visita }}</td> --}}
								<td>{{ $vis -> ci_visitante }}</td>
								<td>{{ $vis -> visitante -> ex}}</td>
								<td>{{ $vis -> tipo_doc }}</td>
								<td>{{ $vis -> visitante -> nombre }}  {{ $vis -> visitante -> paterno }}  {{ $vis -> visitante -> materno }}</td>
								
								<td>{{ $vis -> fecha_entrada }} {{ $vis -> hora_entrada }}</span></td>
								<td>{{ $vis -> motivo -> descripcion}}</td>
								<td>{{ $vis -> empleado -> nombre }}  {{ $vis -> empleado -> paterno }}</td>
								{{-- <td>{{ $vis -> empleado -> cargo -> descripcion }} </td> --}}
								<td><span class="text-info">{{ $vis -> id_tarjeta }}</td>
								{{-- <td>{{ $vis -> tarjeta -> tipo_tarjeta }} </td> --}}
								{{-- <td>{{ $vis -> ubicacion -> nombre}}</td> --}}
								<td>{{ $vis -> visitante -> telefono }}</td>
								<td>{{ $vis -> observaciones }}</td>
								<td>{{ $vis -> modificado_por }}</td>
								<td>	
									
								
								<div class="row">
									<div class="col-md-6">
										<a href="{{ route('visitas.rehabilitar',$vis -> id_visita )}}" onclick ="return confirm('¿Dese rehabilitar esta visita?')" class="btn btn-success btn-sm" title="Rehabilitar visita"><span class="glyphicon glyphicon-thumbs-up"></span></a>
									</div>
									<div class="col-md-6">
										<a href="{{ route('visitas.baja',$vis -> id_visita )}}" class="btn btn-danger btn-sm" title="Marcar como perdida"> <span class="glyphicon glyphicon-thumbs-down"></span></a>
									
									</div>
								</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				
			</div>
		</div>
@endsection