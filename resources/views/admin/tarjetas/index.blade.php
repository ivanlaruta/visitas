@extends('admin.template.main')
@section('title','Lista de tarjetas')

@section('content')

    	<div class="row">
  			<div class="col-md-11 col-md-offset-1">
				<a href="{{-- {{ route('tarjetas.create')}} --}}" class="btn btn-info">Registrar nueva tarjeta</a><hr>
				<p class="text-center">Lista de tarjetas.</p>
				  		
  			<hr>
				<table class="table table-hover">
					<thead>
						<th>ID</th>
						<th>Tipo tarjeta</th>
						<th>Psw</th>
						<th>Empleado asignado</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($ta as $tar)
							<tr>								
								<td>{{ $tar-> id_tarjeta }}</td>
								<td>{{ $tar -> tipo_tarjeta }}</td>
								<td>{{ $tar -> psw }}</td>

								@if(is_null($tar -> ci_empleado))
									<td>No asignado</td>
								@else
									<td>{{ $tar -> empleado -> nombre}} {{ $tar -> empleado -> paterno}}</td>
								@endif

								<td>
									<a href="{{-- {{ route('tarjetas.edit',$tar -> id_tarjeta )}} --}}" class="btn btn-warning">Modificar</a> 
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