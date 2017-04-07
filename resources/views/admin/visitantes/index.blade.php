@extends('admin.template.main')
@section('title','Lista de visitantes')

@section('content')

    	<div class="row">
  			<div class="col-md-11 col-md-offset-1">
				<a href="{{ route('visitantes.create')}}" class="btn btn-info">Registrar nuevo Visitante</a><hr>
				<p class="text-center">Lista de visitantes.</p>
				<table class="table table-hover">
					<thead>
						<th>CI</th>
						<th>Ex</th>
						<th>Nombre</th>
						<th>Telefono</th>
					</thead>
					<tbody>
						@foreach($us as $usu)
							<tr>								
								<td>{{ $usu-> ci }}</td>
								<td>{{ $usu -> ex }}</td>
								<td>{{ $usu -> nombre }} {{ $usu -> paterno }} {{ $usu -> materno }}</td>
								<td>{{ $usu -> telefono }}</td>

								<td>
									<a href="{{ route('visitantes.edit',$usu -> ci )}}" class="btn btn-warning">Modificar</a> 
									<a href="{{ route('visitantes.baja',$usu -> ci )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger">Eliminar</a> 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $us->Links() }} 
 			</div>	
		</div>

@endsection