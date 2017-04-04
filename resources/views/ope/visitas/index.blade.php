@extends('ope.template.main')
@section('title','Lista de visitas')
@section('content')
    	<div class="row">
  			

				<a href="{{ route('visitas.create')}}" class="btn btn-info">Registrar nueva Entrada</a><hr>
				<h3><p class="text-center">Lista de Visitas en curso: 
					<?php
						$time = time();
						echo date("d-m-Y ", $time);
					?>
				</p></h3>
				<table class="table table-hover">
					<thead>
						<th>ID</th>
						<th>Documento</th>
						<th>Ex</th>
						<th>Tipo documento</th>
						<th>Visitante</th>
						{{-- <th>Fecha</th> --}}
						<th>Entrada</th>
						<th>Motivo</th>
						<th>Vistado</th>
						{{-- <th>Cargo</th> --}}
						<th>Tarjeta</th>
						<th>Tipo tarjeta</th>
						{{-- <th>Ubicacion</th> --}}
						<th>Observacion</th>
					</thead>
					<tbody>
						@foreach($vi as $vis)
							<tr>								
								<td>{{ $vis-> id_visita }}</td>
								<td>{{ $vis -> ci_visitante }}</td>
								<td>{{ $vis -> visitante -> ex}}</td>
								<td>{{ $vis -> tipo_doc }}</td>
								<td>{{ $vis -> visitante -> nombre }}  {{ $vis -> visitante -> paterno }}  {{ $vis -> visitante -> materno }}</td>
								{{-- <td>{{ $vis -> fecha }}</td> --}}
								<td>{{ $vis -> hora_entrada }}</td>
								<td>{{ $vis -> motivo -> descripcion}}</td>
								<td>{{ $vis -> empleado -> nombre }}  {{ $vis -> empleado -> paterno }}  {{ $vis -> empleado -> materno }}</td>
								{{-- <td>{{ $vis -> empleado -> cargo -> descripcion }} </td> --}}
								<td>{{ $vis -> id_tarjeta }}</td>
								<td>{{ $vis -> tarjeta -> tipo_tarjeta }} </td>
								{{-- <td>{{ $vis -> ubicacion -> nombre}}</td> --}}
								<td>{{ $vis -> observaciones }}</td>
								<td>	
									<a href="{{ route('visitas.salida',$vis -> id_visita )}}" onclick ="return confirm('¿Desea Marcar la Salida de este visitante ?')" class="btn btn-warning">Salida</a> 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $vi->links() }} 
		</div>
@endsection