
@extends('template.reporte')
@section('content')
	
	  	<div>
	  		
	  		<div class="tituloRep">
	  			REPORTE POR FECHAS
	  		</div>
	  		<div class="filtro">
	  			@if(is_null($recuperado -> inicial))
					@if (is_null($recuperado-> fin))
						Sin filtro (Todos)	
					@else	
						Lista de visitas antes del: {{ $recuperado-> fin }}
					@endif
				@else
						@if (is_null($recuperado-> fin))
							Lista de visitas despues del: {{ $recuperado-> inicial }}
						@else
							Lista de visitas entre el: {{ $recuperado-> inicial }} y el: {{ $recuperado-> fin }}
						@endif
				@endif
	  			
	  		</div>
	  	</div>
	  	<hr>

	  	<div>
            <table>
			    <thead>
			        <tr>
			            <th>Documento</th>
						<th>Ex</th>
						<th>Doc</th>
						<th>Visitante</th>
						<th>Fecha Entrada</th>
						<th>Fecha Salida</th>
						<th>Motivo</th>
						<th>Vistado</th>
						<th>Tarjeta</th>
						<th>Obs</th>
						<th>Estado</th>
			        </tr>
			    </thead>
			    <tbody>	        
					@foreach($vi as $vis)
					<tr>
						<td>{{ $vis -> ci_visitante }}</td>
						<td>{{ $vis -> visitante -> ex}}</td>
						<td>{{ $vis -> tipo_doc }}</td>
						<td>{{ $vis -> visitante -> nombre }}  {{ $vis -> visitante -> paterno }}</td>	
						<td><span class="text-success">{{ date('d-m-Y', strtotime($vis -> fecha_entrada ))}} {{ $vis -> hora_entrada }}</span></td>	
						@if(is_null($vis -> hora_salida))
							<td>-- : -- : --</td>
						@else
							<td><span class="text-danger">{{ date('d-m-Y', strtotime($vis -> fecha_salida)) }} {{ $vis -> hora_salida }}</span></td>
						@endif	
						<td>{{ $vis -> motivo -> descripcion}}</td>
						<td>{{ $vis -> empleado -> nombre }}  {{ $vis -> empleado -> paterno }}
						<td><span class="text-info">{{ $vis -> id_tarjeta }}</td>
						<td>{{ $vis -> observaciones }}</td>
						@if($vis -> fecha_entrada < $vis -> fecha_salida)
							<td><span class="text-warning">Observado</span></td>
						@else
							@if(is_null($vis -> hora_salida))
								<td><span class="text-danger">En curso</span></td>
							@else
								<td><span class="text-success">Finalizado</span></td>
							@endif
						@endif
					</tr>
					@endforeach
			    </tbody>
			</table>
		</div>
@endsection
