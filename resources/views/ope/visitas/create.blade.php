@extends('template.dashboard')
@section('title','visitas')

@section('content')
@section('ventana','Creacion de nueva visita')	


<div class="row">
  	<div class="col-md-12">
		<div class="col-md-4" >
			<div class="row">
				<div class="col-md-12">
					{!! Form::open (['route' => 'visitas.create','method' => 'GET','class' => 'navbar-form pull-left'])!!}
						<div class ="row">	
							
							{!! Form::text('ci', $recuperado -> ci ,['class'=> 'form-control','placeholder'=>'Ingrese CI para busqueda','aria-describedby'=>'seacrch'])!!}
							{{-- <span class="input-group-addon" > --}}
								<button type="submit"  class="btn btn-info" aria-label="Left Align">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								</button>
								{{-- <span class="glyphicon glyphicon-search" ></span> --}}
					      	{{-- </span> --}}
						</div>
					{!! Form::close()!!}
				</div>
			</div>
			<div class="row">
					<table class="table table-hover">
					<thead>
						<th><h6>CI</h6></th>
						<th><h6>Nombre </h6></th>
						<th><h6>Agregar </h6></th>
					</thead>
					<tbody>
						@foreach($vis as $visi)
							<tr>								
								<td>{{ $visi-> ci }}</td>
								<td>{{ $visi -> nombre }} {{ $visi -> paterno }} </td>
								<td><a href="{{ route('visitas.edit', $visi -> ci )}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-ok"></span></a> 
								
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{ $vis->links() }} 
		</div>


		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					{!! Form::open(['route'=>'visitas.store','method'=>'POST'])!!}
					<div class="form-group">
						<h6>CI</h6>
						{!! Form::text('ci',  $recuperado -> ci ,['class'=> 'form-control texto','placeholder'=>'Ingrese Nro de documento para registrar'])!!}
					</div>
			    </div>
			    <div class="col-md-2">
					<div class="form-group">
						<h6>Expedido</h6>
						{!! Form::select('ex',$expe,'LP',['class'=>'form-control'])!!}
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
						{!! Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingrese nombre de visitante','required'])!!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<h6>Paterno:</h6>
						{!! Form::text('paterno',null,['class'=> 'form-control','placeholder'=>'Ingrese apellido paterno','required'])!!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h6>Materno:</h6>
						{!! Form::text('materno',null,['class'=> 'form-control','placeholder'=>'Ingrese apellido materno'])!!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<h6>Telefono:</h6>
						{!! Form::text('telefono',null,['class'=> 'form-control','placeholder'=>'Ingrese telefono','required'])!!}
					</div>
				</div>
			</div>
			

			<div class="row">		
				<div class="col-md-6">
					<div class="form-group">
						<h6>Motivo:</h6>
						{!! Form::select('id_motivo',$motivos,null,['class'=>'form-control ','placeholder'=>'motivo de la visita','required'])!!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<h6>Empleado:</h6>
						<select class="form-control select2" data-width="100%" name="ci_empleado" id="empleados" required >
							<option value="">Selecione un empleado</option>
						    @foreach($empleados as $emp)
						      <option value="{{$emp->ci}}">{{$emp->paterno}} {{$emp->nombre}} - {{$emp->descripcion}} - {{$emp->area}}</option>
						    @endforeach
					  	</select> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h6>Codigo de Tarjeta :</h6>

						<select class="form-control select2" data-width="100%" name="id_tarjeta" id="tarjetas" required >
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
			
				
		
			<hr>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::submit('Marcar Ingreso visita',['class'=>'btn btn-primary'])!!}
						</div>
					</div>
					<div class="col-md-6">
						<a href="{{ route('visitas.index')}}" onclick ="return confirm('Los datos no guardados se perderan al salir de esta pagina. ¿Desea continuar?')" class="btn btn-warning">Ver visitas en Curso</a>
						{!! Form::close()!!}
					</div>
				</div>
			</div>	
		</div>	
	</div>	
</div>
	
</div>
@endsection


@section('scripts')
<script>

$('.texto').focus();

$(document).ready(function() {
  $('#empleados').select2({
  	theme: "bootstrap"
  });

});
$(document).ready(function() {
  $('#tarjetas').select2({
  	theme: "bootstrap"
  });

});
	
</script> 
@endsection