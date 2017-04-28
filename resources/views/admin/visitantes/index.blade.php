@extends('template.dashboard')
@section('ventana','Lista de visitantes')

@section('content')

    	<div class="row">
  			<div class="col-md-10 col-md-offset-1">
				<a href="{{ route('visitantes.create')}}" class="btn btn-success">Registrar nuevo Visitante</a><hr>
				<table width="100%" class="table table-hover table-striped mitabla" id="todo">
					<thead>
						<th>CI</th>
						<th>Ex</th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($us as $usu)
							<tr>								
								<td>{{ $usu-> ci }}</td>
								<td>{{ $usu -> ex }}</td>
								<td>{{ $usu -> nombre }} {{ $usu -> paterno }} {{ $usu -> materno }}</td>
								<td>{{ $usu -> telefono }}</td>

								<td>
								<div class="row">
									<a href="{{ route('visitantes.edit',$usu -> ci )}}" class="btn btn-warning" title="Modificar"><span class="fa fa-edit "></span></a> 
									<a href="{{ route('visitantes.baja',$usu -> ci )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger" title="Eliminar"><span class="fa fa-trash-o"></span></a>  
								</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
{{-- 				{{ $us->Links() }} 
 --}} 			</div>	
		</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // alert('1');
        $('#todo').DataTable({
            
            responsive: true

        });
    });
</script> 
@endsection