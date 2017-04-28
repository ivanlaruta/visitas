@extends('template.dashboard')
@section('ventana','Lista de Usuarios')

@section('content')

    	<div class="row">
  			<div class="col-md-10 col-md-offset-1">
				<a href="{{ route('users.create')}}" class="btn btn-success">Registrar nuevo Usuario</a><hr>
				<table width="100%" class="table table-hover table-striped mitabla" id="todo">
					<thead>
						<th>Ci empleado</th>
						<th>Empleado</th>
						<th>Usuario</th>
						<th>Rol</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($us as $usu)
							<tr>								
								<td>{{ $usu-> ci_empleado }}</td>

								@if(is_null($usu -> ci_empleado))
									<td>No asignado</td>
								@else
									<td>{{ $usu-> empleado -> nombre }} {{ $usu-> empleado -> paterno }}</td>
								@endif

								<td>{{ $usu -> usuario }}</td>
								<td>
									@if($usu->id_rol==1)
											<span class="text-primary"> {{ 'Administrador' }}</span>
									@else
											<span class="text-success"> {{ 'Operador' }}</span>
									@endif
								</td>
								<td>
								<div class="row">
									<a href="{{ route('users.edit',$usu -> usuario )}}" class="btn btn-warning" title="Modificar"><span class="fa fa-edit "></span></a> 
									<a href="{{ route('users.baja',$usu -> usuario )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger" title="Eliminar"><span class="fa fa-trash-o"></span></a>  
								</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{-- {{ $us->Links() }}  --}}
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