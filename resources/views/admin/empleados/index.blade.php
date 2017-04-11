@extends('template.dashboard')
@section('title','Lista de empleados')

@section('content')

    	<div class="row">
  			<div class="col-md-11">
				<a href="{{ route('empleados.create')}}" class="btn btn-info">Registrar nuevo empleado</a><hr>
				<p class="text-center">Lista de empleados.</p>
				<hr>
				<table class="table table-hover">
					<thead>
						<th>CI</th>
						<th>Ex</th>
						<th>Nombre</th>
						<th>E-mail</th>
						<th>Cargo</th>
						<th>Ubicacion</th>
						<th>Telefono</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($us as $usu)
							<tr>								
								<td>{{ $usu-> ci }}</td>
								<td>{{ $usu -> ex }}</td>
								<td>{{ $usu -> nombre }} {{ $usu -> paterno }} {{ $usu -> materno }}</td>
								<td>{{ $usu -> email }}</td>
								<td>{{ $usu -> cargo -> descripcion }}</td>
								<td>{{ $usu -> ubicacion -> nombre }}</td>
								<td>{{ $usu -> telefono }}</td>

								<td>
									<a href="{{ route('empleados.edit',$usu -> ci )}}" class="btn btn-warning">Modificar</a> 
									<a href="{{ route('empleados.baja',$usu -> ci )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger">Eliminar</a> 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $us->Links() }} 
 			</div>	
		</div>

@endsection