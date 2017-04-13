@extends('template.dashboard')

@section('content')
@section('ventana','Lista de visitas reportadas')	

<br><br>
			<div class="col-md-12">
				<div class="row">
  					<div class="col-md-12">
						{!! Form::open (['route' => 'visitas.reportadas','method' => 'GET','class' => 'navbar-form pull-left'])!!}
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
						<th>CI</th>
						<th>Ex</th>
						<th>Tipo doc</th>
						<th>Visitante</th>
						<th>Telefono</th>
						<th>Fecha</th>
						<th>Entrada</th>
						<th>Motivo</th>
						<th>Vistado</th>
						{{-- <th>Cargo</th> --}}
						<th>Tarjeta</th>
						{{-- <th>Tipo tarjeta</th> --}}
						{{-- <th>Ubicacion</th> --}}
						<th>Obs</th>
					</thead>
					<tbody>
						@foreach($vi as $vis)
							<tr>								
								{{-- <td>{{ $vis-> id_visita }}</td> --}}
								<td>{{ $vis -> ci_visitante }}</td>
								<td>{{ $vis -> visitante -> ex}}</td>
								<td>{{ $vis -> tipo_doc }}</td>
								<td>{{ $vis -> visitante -> nombre }}  {{ $vis -> visitante -> paterno }}  {{ $vis -> visitante -> materno }}</td>
								<td>{{ $vis -> visitante -> telefono }}</td>
								<td>{{ $vis -> fecha }}</td> 
								<td><span class="text-danger">{{ $vis -> hora_entrada }}</span></td>
								<td>{{ $vis -> motivo -> descripcion}}</td>
								<td>{{ $vis -> empleado -> nombre }}  {{ $vis -> empleado -> paterno }}</td>
								{{-- <td>{{ $vis -> empleado -> cargo -> descripcion }} </td> --}}
								<td><span class="text-info">{{ $vis -> id_tarjeta }}</td>
								{{-- <td>{{ $vis -> tarjeta -> tipo_tarjeta }} </td> --}}
								{{-- <td>{{ $vis -> ubicacion -> nombre}}</td> --}}
								<td>{{ $vis -> observaciones }}</td>
								<td>	
									<a href="{{ route('visitas.restaurar',$vis -> id_visita )}}"  class="btn btn-success">Restaurar</a> 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				</div>
				{{ $vi->links() }} 
		</div>
@endsection