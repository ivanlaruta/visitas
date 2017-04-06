@extends('admin.template.main')
@section('title','Lista de Ubicaciones')

@section('content')

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				<a href="{{ route('ubicaciones.create')}}" class="btn btn-info">Registrar nueva Ubicacion</a><hr>
				<p class="text-center">Lista de Ubicaciones.</p>
				<table class="table table-hover">
					<thead>
						<th>ID</th>
						<th>Nombre</th>
						<th>Ciudad</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($ub as $ubs)
							<tr>								
								<td>{{ $ubs-> id_ubicacion }}</td>
								<td>{{ $ubs -> nombre }}</td>
								<td>{{ $ubs -> ciudad }}</td>
								<td>
									<a href="{{ route('ubicaciones.edit',$ubs -> id_ubicacion )}}" class="btn btn-warning">Modificar</a> 
									<a href="{{ route('ubicaciones.baja',$ubs -> id_ubicacion )}}" onclick ="return confirm('¿Desea dar de baja?')" class="btn btn-danger">Eliminar</a> 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $ub->Links() }} 
 			</div>	
		</div>

@endsection