@extends('template.dashboard')
@section('title','Lista de Todas las visitas')
@section('content')
@section('ventana','Visitas diarias')	

    	<div class="col-md-12">
				<div class="row">
  					<div class="col-md-12">
				{!! Form::open (['route' => 'reportes.visitasDiarias','method' => 'GET','class' => 'navbar-form pull-left'])!!}
					<div class ="input-group">	
						{!! Form::text('ci',$recuperado -> ci,['class'=> 'form-control','placeholder'=>'Ingrese Nro de documento','aria-describedby'=>'seacrch'])!!}
						<span class="input-group-addon" id="seach">

						<span class="glyphicon glyphicon-search" aria-hidden="true">
				       		 
				      </span>
				      </span>
					</div>
				{!! Form::close()!!}
			</div>
				</div>

				<div class="table-responsive">
                    <table class="table table-hover table-striped">
					<thead>
						{{-- <th>ID</th> --}}
						<th>Documento</th>
						<th>Ex</th>
						<th>Tipo doc</th>
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
						<th>Obs</th>
						<th>Estado</th>
					</thead>
					<tbody>
						@foreach($vi as $vis)
						@if(is_null($vis -> hora_salida))
							<tr class="danger">
						@else
							 <tr class="success">	
						@endif							
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
								<td>{{ $vis -> observaciones }}</td>
								@if(is_null($vis -> hora_salida))
									<td><span class="text-danger">En curso</span></td>
								@else
									<td><span class="text-success">Finalizado</span></td>
								@endif
							</tr>
						@endforeach
					</tbody>
				</table>
				</div>
				{{ $vi->links() }} 
		</div>
@endsection