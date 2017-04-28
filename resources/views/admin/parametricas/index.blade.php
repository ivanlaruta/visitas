@extends('template.dashboard')
@section('ventana','Lista de Paramentrica')

@section('content')

    	<div class="row">
  			<div class="col-md-10 col-md-offset-1">
				<a href="{{ route('parametricas.create')}}" class="btn btn-success">Registrar nueva parametrica</a><hr>
				
				<table width="100%" class="table table-hover table-striped mitabla" id="todo">
					<thead>
						<th>Parametrica</th>
						<th>ID</th>
						<th>Descripcion</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($pa as $par)
							<tr>								
								<td>{{ $par-> nombre_tabla }}</td>
								<td>{{ $par -> id }}</td>
								<td>{{ $par -> descripcion }}</td>
								<td>
								<div class="row">
									<a href="{{ route('parametricas.edit',$par -> id_parametrica )}}" class="btn btn-warning" title="Modificar"><span class="fa fa-edit "></span></a>
									<a href="{{ route('parametricas.baja',$par -> id_parametrica )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger" title="Eliminar"><span class="fa fa-trash-o"></span></a>  
								</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
{{-- 				{{ $pa->Links() }} 
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