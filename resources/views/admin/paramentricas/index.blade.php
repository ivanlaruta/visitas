@extends('admin.template.main')
@section('title','Lista de Usuarios')

@section('content')

    	<div class="row">
  			<div class="col-md-11 col-md-offset-1">
				<a href="{{ route('cargos.create')}}" class="btn btn-info">Registrar nuevo Cargo</a><hr>
				<p class="text-center">Lista de Cargos.</p>
				<table class="table table-hover">
					<thead>
						<th>ID</th>
						<th>Descripcion</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($ca as $car)
							<tr>								
								<td>{{ $car-> id_cargo }}</td>
								<td>{{ $car -> descripcion }}</td>
								<td>
									<a href="{{ route('cargos.edit',$car -> id_cargo )}}" class="btn btn-warning">Modificar</a> 
									<a href="{{ route('cargos.baja',$car -> id_cargo )}}" onclick ="return confirm('¿Desea dar de baja?')" class="btn btn-danger">Eliminar</a> 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $ca->Links() }} 
 			</div>	
		</div>


@endsection