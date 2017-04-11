@extends('template.dashboard')
@section('title','Lista de Paramentrica')

@section('content')

    	<div class="row">
  			<div class="col-md-10 col-md-offset-1">
				<a href="{{ route('parametricas.create')}}" class="btn btn-info">Registrar nueva parametrica</a><hr>
				<p class="text-center">Lista de parametrica.</p>
				<table class="table table-hover">
					<thead>
						<th>PARAMETRICA</th>
						<th>ID</th>
						<th>DESCRIPCION</th>
					</thead>
					<tbody>
						@foreach($pa as $par)
							<tr>								
								<td>{{ $par-> nombre_tabla }}</td>
								<td>{{ $par -> id }}</td>
								<td>{{ $par -> descripcion }}</td>
								<td>
									<a href="{{ route('parametricas.edit',$par -> id_parametrica )}}" class="btn btn-warning">Modificar</a> 
									<a href="{{ route('parametricas.baja',$par -> id_parametrica )}}" onclick ="return confirm('¿Desea dar de baja?')" class="btn btn-danger">Eliminar</a> 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $pa->Links() }} 
 			</div>	
		</div>


@endsection