@extends('template.dashboard')
@section('ventana','Lista de tarjetas')

@section('content')

    	<div class="row">
  			<div class="col-md-10 col-md-offset-1">
				<a href="{{ route('tarjetas.create')}}" class="btn btn-success">Registrar nueva tarjeta</a><hr>
				<table class="table table-hover">
					<thead>
						<th>ID</th>
						<th>Tipo tarjeta</th>
						<th>Contraseña</th>
						<th>ubicacion</th>
						<th>Empleado asignado</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($ta as $tar)
							<tr>								
								<td>{{ $tar-> id_tarjeta }}</td>
								<td>{{ $tar -> tipo_tarjeta }}</td>
								@if(is_null($tar -> ci_empleado))
									<td> ---- </td>
								@else
									<td>{{ $tar -> psw }}</td>
								@endif

								@if(is_null($tar -> id_ubicacion))
									<td> ---- </td>
								@else
									<td>{{ $tar -> ubicacion -> nombre }}</td>
								@endif


								@if(is_null($tar -> ci_empleado))
									<td>No asignado</td>
								@else
									<td>{{ $tar -> empleado -> nombre}} {{ $tar -> empleado -> paterno}}</td>
								@endif

								<td>
									<a href="{{ route('tarjetas.edit',$tar -> id_tarjeta )}}" class="btn btn-warning">Modificar</a> 
									<a href="{{ route('tarjetas.baja',$tar -> id_tarjeta )}}" onclick ="return confirm('¿Desea dar de baja?')" class="btn btn-danger">Eliminar</a> 
								</td>

							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $ta->Links() }} 
 			</div>	
		</div>
@endsection