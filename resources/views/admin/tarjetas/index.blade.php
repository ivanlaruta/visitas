@extends('template.dashboard')
@section('ventana','Lista de tarjetas')

@section('content')

    	<div class="row">
  			<div class="col-md-10 col-md-offset-1">
				<a href="{{ route('tarjetas.create')}}" class="btn btn-success">Registrar nueva tarjeta</a><hr>
				 <div class="table-responsive">
				<table width="100%" class="table table-hover table-striped mitabla" id="todo">
					<thead>
						<th>ID</th>
						<th>Tipo tarjeta</th>
						<th>Contraseña</th>
						<th>ubicacion</th>
						<th>Empleado asignado</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($ta as $tar)
							<tr>								
								<td>{{ $tar-> id_tarjeta }}</td>
								<td>{{ $tar -> tipo_tarjeta }}</td>
								@if(is_null($tar -> ci_empleado))
									<td> ---- </td>
								@else
									<td>{{ $tar -> psw }}</td>
								@endif

								@if(is_null($tar -> id_ubicacion))
									<td> ---- </td>
								@else
									<td>{{ $tar -> ubicacion -> nombre }}</td>
								@endif


								@if(is_null($tar -> ci_empleado))
									<td>No asignado</td>
								@else
									<td>{{ $tar -> empleado -> nombre}} {{ $tar -> empleado -> paterno}}</td>
								@endif

								<td>
								<div class="row">
									<a href="{{ route('tarjetas.edit',$tar -> id_tarjeta )}}" class="btn btn-warning" title="Modificar"><span class="fa fa-edit "></span></a>
									<a href="{{ route('tarjetas.baja',$tar -> id_tarjeta )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger" title="Eliminar"><span class="fa fa-trash-o"></span></a>  
								</div>
								</td>

							</tr>
						@endforeach
					</tbody>
				</table>
{{-- 				{{ $ta->Links() }} 
 --}} 			</div>
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