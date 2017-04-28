@extends('template.dashboard')
@section('ventana','Lista de empleados')

@section('content')
@section('ventana','Lista de empleados')
    	<div class="row">
  			<div class="col-md-12">
				<a href="{{ route('empleados.create')}}" class="btn btn-success">Registrar nuevo empleado</a><hr>
				<div class="table-responsive">
				<table width="100%" class="table table-hover table-striped mitabla" id="todo">
					<thead>
						<th>CI</th>
						<th>Ex</th>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Cargo</th>
						<th>Ubicacion</th>
						<th>Telefono</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($us as $usu)
							<tr>								
								<td>{{ $usu-> ci }}</td>
								<td>{{ $usu -> ex }}</td>
								<td>{{ $usu -> paterno }} {{ $usu -> materno }} {{ $usu -> nombre }} </td>
								<td>{{ $usu -> email }}</td>
								<td>{{ $usu -> cargo -> descripcion }}</td>
								<td>{{ $usu -> ubicacion -> nombre }}</td>
								<td>{{ $usu -> telefono }}</td>

								<td>
								<div class="row">
									<a href="{{ route('empleados.edit',$usu -> ci )}}" class="btn btn-warning" title="Modificar"><span class="fa fa-edit "></span></a> 
									<a href="{{ route('empleados.baja',$usu -> ci )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger" title="Eliminar"><span class="fa fa-trash-o"></span></a>  
								</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
{{-- 				{{ $us->Links() }} 
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