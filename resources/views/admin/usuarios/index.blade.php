@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('content')
	
		<a href="{{ route('usuarios.create')}}" class="btn btn-info">Registrar nuevo Usuario</a><hr>

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				
				<table class="table table-hover">
					<thead>
						<th>ID</th>
						<th>Empleado</th>
						<th>Usuario</th>
						<th>Rol</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($us as $us)
							<tr>
								<td>{{ $us -> id_usuario }}</td>
								<td>{{ $us-> ci_empleado }}</td>
								<td>{{ $us -> usuario }}</td>
								<td>
									@if($us->id_rol=="1")
											<span class="larabel label-info"> {{ 'Administrador' }}</span>
									@else
											<span class="larabel label-success"> {{ 'Operador' }}</span>
									@endif
								</td>
								<td>
									<a href="{{ route('usuarios.edit',$us -> id_usuario )}}" class="btn btn-warning">modificar</a> 
									<a href="{{ route('usuarios.destroy',$us -> id_usuario )}}" onclick ="return confirm('¿Desea Eliminar?')" class="btn btn-danger">Eliminar</a> 
								</td>

							</tr>
						@endforeach
					</tbody>
				</table>
				{{-- {!! $us -> render() !!} --}}
			 
			{{--  {{ $us->links() }} --}}
 			</div>	
		</div>
	
@endsection
