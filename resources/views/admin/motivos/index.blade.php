@extends('template.dashboard')
@section('ventana','Lista de motivos')

@section('content')

    	<div class="row">
  			<div class="col-md-8 col-md-offset-2">
				<a href="{{ route('motivos.create')}}" class="btn btn-success">Registrar nuevo motivo</a><hr>
				
				<table width="100%" class="table table-hover table-striped mitabla" id="todo">
					<thead>
						<th></th>
						<th>Descripcion</th>
						<th>Accion</th>
						
					</thead>
					<tbody>
						@foreach($mo as $mot)
							<tr>								
								<td>{{ $mot-> id_motivo }}</td>
								<td>{{ $mot -> descripcion }}</td>
					
								<td>
								<div class="row">
									<a href="{{ route('motivos.edit',$mot -> id_motivo )}}" class="btn btn-warning" title="Modificar"><span class="fa fa-edit "></span></a>
									<a href="{{ route('motivos.baja',$mot -> id_motivo )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger" title="Eliminar"><span class="fa fa-trash-o"></span></a>  
								</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
{{-- 				{{ $mo->Links() }} 
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