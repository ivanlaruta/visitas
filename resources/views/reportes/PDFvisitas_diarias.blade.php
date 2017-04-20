
@extends('template.reporte')
@section('content')
	
	  	<div>
	  		
	  		<div class="tituloRep">
	  			REPORTE VISITAS | <?php $time = time(); echo date("d-m-Y", $time);?>
	  		</div>
	  		<div class="filtro">
	  			@if(is_null($recuperado -> ci))
					Ningun filtro
				@else
					 Filtro documento = {{ $recuperado -> ci }} 	
				@endif	
	  			
	  		</div>
	  	</div>
	  	<hr>

	  	<div>
            <table>
				<thead>
					{{-- <th>ID</th> --}}
					<th>Documento</th>
					<th>Ex</th>
					<th>Doc</th>
					<th>Visitante</th>
					{{-- <th>Fecha</th> --}}
					<th>Entrada</th>
					<th>Salida</th>
					<th>Motivo</th>
					<th>Vistado</th>
					{{-- <th>Cargo</th> --}}
					<th>Tarjeta</th>
					{{-- <th>Tipo tarjeta</th> --}}
					{{-- <th>Ubicacion</th> --}}
				</thead>
				<tbody>
					<tr></tr>
					@foreach($vi as $vis)
						 <tr>					
							{{-- <td>{{ $vis-> id_visita }}</td> --}}
							<td>{{ $vis -> ci_visitante }}</td>
							<td>{{ $vis -> visitante -> ex}}</td>
							<td>{{ $vis -> tipo_doc }}</td>
							<td>{{ $vis -> visitante -> nombre }}  {{ $vis -> visitante -> paterno }}  {{ $vis -> visitante -> materno }}</td>
							{{-- <td>{{ $vis -> fecha }}</td> --}}
							<td><span class="text-success">{{ $vis -> hora_entrada }}</span></td>
							<td><span class="text-danger">{{ $vis -> hora_salida }}</span></td>
							<td>{{ $vis -> motivo -> descripcion}}</td>
							<td>{{ $vis -> empleado -> nombre }}  {{ $vis -> empleado -> paterno }}  {{ $vis -> empleado -> materno }}</td>
							{{-- <td>{{ $vis -> empleado -> cargo -> descripcion }} </td> --}}
							<td><span class="text-info">{{ $vis -> id_tarjeta }}</td>
							{{-- <td>{{ $vis -> tarjeta -> tipo_tarjeta }} </td> --}}
							{{-- <td>{{ $vis -> ubicacion -> nombre}}</td> --}}
							
							
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
@endsection
