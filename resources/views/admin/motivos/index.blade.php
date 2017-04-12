@extends('template.dashboard')
@section('ventana','Lista de motivos')

@section('content')

    	<div class="row">
  			<div class="col-md-8 col-md-offset-2">
				<a href="{{ route('motivos.create')}}" class="btn btn-success">Registrar nuevo motivo</a><hr>
				
				<table class="table table-hover">
					<thead>
						<th></th>
						<th>Descripcion</th>
						
					</thead>
					<tbody>
						@foreach($mo as $mot)
							<tr>								
								<td>{{ $mot-> id_motivo }}</td>
								<td>{{ $mot -> descripcion }}</td>
					
								<td>
									<a href="{{ route('motivos.edit',$mot -> id_motivo )}}" class="btn btn-warning">Modificar</a> 
									<a href="{{ route('motivos.baja',$mot -> id_motivo )}}" onclick ="return confirm('¿Desea dar de baja?')" class="btn btn-danger">Eliminar</a> 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $mo->Links() }} 
 			</div>	
		</div>

@endsection