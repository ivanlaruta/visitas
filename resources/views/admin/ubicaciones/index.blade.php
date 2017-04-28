@extends('template.dashboard')
@section('ventana','Lista de Ubicaciones')

@section('content')

    	<div class="row">
  			<div class="col-md-10 col-md-offset-1">
				<a href="{{ route('ubicaciones.create')}}" class="btn btn-success">Registrar nueva Ubicacion</a><hr>
				<div class="table-responsive">
				<table width="100%" class="table table-hover table-striped mitabla" id="todo">
					<thead>
						<th>ID</th>
						<th>Nombre</th>
						<th>Ciudad</th>
						<th>Direccion</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($ub as $ubs)
							<tr>								
								<td>{{ $ubs-> id_ubicacion }}</td>
								<td>{{ $ubs -> nombre }}</td>
								<td>{{ $ubs -> ciudad }}</td>
								<td>{{ $ubs -> direccion }}</td>
								<td>
								<div class="row">
									<a href="{{ route('ubicaciones.edit',$ubs -> id_ubicacion )}}" class="btn btn-warning" title="Modificar"><span class="fa fa-edit "></span></a>
									<a href="{{ route('ubicaciones.baja',$ubs -> id_ubicacion )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger" title="Eliminar"><span class="fa fa-trash-o"></span></a>  
								</div>
								</td>

							</tr>
						@endforeach
					</tbody>
				</table>
{{-- 				{{ $ub->Links() }} 
 --}} 				</div>
 			</div>
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