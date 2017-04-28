@extends('template.dashboard')
@section('title','Lista de cargos')
@section('content')
@section('ventana','Cargos')
    	<div class="row">
  			<div class="col-md-8 col-md-offset-2">
				<a href="{{ route('cargos.create')}}" class="btn btn-success">Registrar nuevo Cargo</a><hr>
				<table width="100%" class="table table-hover table-striped mitabla" id="todo">
					<thead>
						
						<th>Descripcion</th>
						<th>Area</th>
						<th>Accion</th>
					</thead>
					<tbody>
						@foreach($ca as $car)
							<tr>								
								{{-- <td>{{ $car-> id_cargo }}</td> --}}
								<td>{{ $car -> descripcion }}</td>
								<td>{{ $car -> area }}</td>
								<td>
								<div class="row">
									<a href="{{ route('cargos.edit',$car -> id_cargo )}}" class="btn btn-warning" title="Modificar"><span class="fa fa-edit "></span></a> 
									<a href="{{ route('cargos.baja',$car -> id_cargo )}}" o onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger" title="Eliminar"><span class="fa fa-trash-o"></span></a>  
								</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{-- {{ $ca->Links() }}  --}}
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