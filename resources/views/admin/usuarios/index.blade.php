@extends('admin.template.main')
@section('title','Lista de Usuarios')

@section('content')

    	<div class="row">
  			<div class="col-md-11 col-md-offset-1">
				<a href="{{ route('users.create')}}" class="btn btn-info">Registrar nuevo Usuario</a><hr>
				<p class="text-center">Lista de Usuarios.</p>
				<hr>
				<table class="table table-hover">
					<thead>
						<th>Empleado</th>
						<th>Usuario</th>
						<th>Rol</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($us as $usu)
							<tr>								
								<td>{{ $usu-> ci_empleado }}</td>
								<td>{{ $usu -> usuario }}</td>
								<td>
									@if($usu->id_rol=="1")
											<span class="larabel label-info"> {{ 'Administrador' }}</span>
									@else
											<span class="larabel label-success"> {{ 'Operador' }}</span>
									@endif
								</td>
								<td>
									<a href="{{ route('users.edit',$usu -> usuario )}}" class="btn btn-warning">Modificar Rol</a> 
									<a href="{{ route('users.baja',$usu -> usuario )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger">Eliminar</a> 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $us->Links() }} 
 			</div>	
		</div>

@endsection