@extends('template.dashboard')
@section('title','visitas')
@section('content')
@section('ventana','Creacion de nueva visita')	

<div class="row">
  	<div class="col-md-12">
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
					{!! Form::open (['route' => 'visitas.create','method' => 'GET','class' => 'navbar-form pull-left'])!!}
						<div class ="input-group">	
							{!! Form::text('ci', null ,['class'=> 'form-control','placeholder'=>'Ingrese CI para busqueda','aria-describedby'=>'seacrch'])!!}
							<span class="input-group-addon" id="seach">
							<span class="glyphicon glyphicon-search" aria-hidden="true">		 
					      </span>
					      </span>
						</div>
					{!! Form::close()!!}
				</div>
			</div>
			<div class="row">
					<table class="table table-hover">
					<thead>
						<th><h6>CI</h6></th>
						<th><h6>Nombre </h6></th>
					</thead>
					{{-- <tbody>
						@foreach($vis as $visi)
							<tr>								
								<td>{{ $visi-> ci }}</td>
								<td>{{ $visi -> nombre }} {{ $visi -> paterno }} </td>
								<td><a href="{{ route('visitas.edit', $visi -> ci )}}" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></a> 
								
								</td>
							</tr>
						@endforeach
					</tbody> --}}
				</table>
			</div>
			{{-- {{ $vis->links() }}  --}}
		</div>


		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					{!! Form::open(['route'=>'visitas.ingreso','method'=>'POST'])!!}
					<div class="form-group">
						<h6>CI</h6>
						{!! Form::text('ci',  $dato->ci ,['class'=> 'form-control','readonly'])!!}
					</div>
			    </div>
			    <div class="col-md-2">
					<div class="form-group">
						<h6>Expedido</h6>
						{!! Form::text('ex',$dato->ex,['class'=>'form-control','readonly'])!!}
					</div>
			    </div>
			    <div class="col-md-4">
					<div class="form-group">
					<h6>Tipo Documento</h6>
						{!! Form::select('tipo_doc',$tipoDoc,null,['class'=>'form-control'])!!}
					</div>
			    </div>
	   		</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h6>Nombre:</h6>
						{!! Form::text('nombre',$dato->nombre,['class'=> 'form-control','readonly'])!!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<h6>Paterno:</h6>
						{!! Form::text('paterno',$dato->paterno,['class'=> 'form-control','readonly'])!!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h6>Materno:</h6>
						{!! Form::text('materno',$dato->materno,['class'=> 'form-control','readonly'])!!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<h6>Telefono:</h6>
						{!! Form::text('telefono',$dato->telefono,['class'=> 'form-control','placeholder'=>'Ingrese telefono','required'])!!}
					</div>
				</div>
			</div>
			
			<div class="row">		
				<div class="col-md-6">
					<div class="form-group">
						<h6>Motivo:</h6>
						{!! Form::select('id_motivo',$motivos,null,['class'=>'form-control','placeholder'=>'motivo de la visita','required'])!!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<h6>Empleado:</h6>
						
						<select class="form-control" name="ci_empleado" required>
							<option value="">Selecione un empleado</option>
						    @foreach($empleados as $emp)
						      <option value="{{$emp->ci}}">{{$emp->paterno}} {{$emp->nombre}}</option>
						    @endforeach
					  	</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h6>Codigo de Tarjeta :</h6>
						<select class="form-control" name="id_tarjeta" required>
							<option value="">Tarjeta para el visitante</option>
						    @foreach($tarjetas as $tar)
						      <option value="{{$tar->id_tarjeta}}">{{$tar->id_tarjeta}} - {{$tar->tipo_tarjeta}}</option>
						    @endforeach
					  	</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<h6>Obervaciones:</h6>
						{!! Form::text('observaciones',null,['class'=> 'form-control','placeholder'=>'observacion'])!!}
					</div>
				</div>
			</div>

			<input id="ubicacion" name="ubicacion" type="hidden" value="{{ Auth::user()->empleado->ubicacion->id_ubicacion }}">
			
	
		</div> 
	</div>	
</div>
<div class="row">

	<div class="col-md-4 col-md-offset-4">

		<div class="form-group">

			{!! Form::submit('Marcar Ingreso visita',['class'=>'btn btn-primary'])!!}
			<a href="{{ route('visitas.index')}}" onclick ="return confirm('Los datos no guardados se perderan al salir de esta pagina. ¿Desea continuar?')" class="btn btn-warning">Ver visitas en Curso</a>
			{!! Form::close()!!}
		</div>
	</div>	
</div>	

@endsection

