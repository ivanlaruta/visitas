@extends('admin.template.main')

@section('title','crear empleado')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  			  			<p class="text-center">Creacion de Empleados.</p>
  			<hr>
				{!! Form::open(['route'=>'empleados.store','method'=>'POST'])!!}

				
				<div class="form-group">
					<div class="form-group">
					{!! Form::label('id','CI')!!}
					</div>
		        			<div class="form-group">
					{!! Form::text('ci',null,['class'=> 'form-control','placeholder'=>'ci','required'])!!}
					</div>
					
					<div class="form-group">
						<h6>Expendido</h6>
						{!! Form::select('ex',['LP'=>'La Paz','OR'=>'Oruro','PT'=>'Potosi','CH'=>'Chuquisaca','CB'=>'Cochabamba','TJ'=>'Tarija','BN'=>'Beni','PA'=>'Pando','SC'=>'Santa Cruz'],null,['class'=>'form-control','placeholder'=>'seleccione una expedicion','required'])!!}
					</div>
		      
					<div class="form-group">
					{!! Form::label('nom','Nombre')!!}
					</div>
					<div class="form-group">
					{!! Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingrese Nombre','required'])!!}
					</div>
					<div class="form-group">
					{!! Form::label('pat','Paterno')!!}
					</div>
					<div class="form-group">
					{!! Form::text('paterno',null,['class'=> 'form-control','placeholder'=>'Ingrese apellido Paterno','required'])!!}
					</div>
					<div class="form-group">
					{!! Form::label('materno','Materno')!!}
					</div>
					<div class="form-group">
					{!! Form::text('materno',null,['class'=> 'form-control','placeholder'=>'ingrese apellido Materno','required'])!!}
					</div>

					<div class="form-group">
					{!! Form::label('email','E-mail')!!}
					</div>
					<div class="form-group">
					{!! Form::email('email',null,['class'=> 'form-control','placeholder'=>'ejemplo@toyosa.com','required'])!!}
					</div>

					<div class="form-group">
					{!! Form::label('cargo','Cargo')!!}
					{!! Form::select('id_cargo',$cargos,null,['class'=>'form-control','placeholder'=>'seleccione un cargo','required'])!!}
					</div>
					
					<div class="form-group">
					{!! Form::label('email','Ubicacion')!!}
						{!! Form::select('id_ubicacion',$ubica,null,['class'=>'form-control','placeholder'=>'seleccione una ubicacion','required'])!!}
					</div>


					<div class="form-group">
					{!! Form::label('te','Telefono')!!}
					</div>
					<div class="form-group">
					{!! Form::text('telefono',null,['class'=> 'form-control','placeholder'=>'77712345','required'])!!}
					</div>

				</div>

				<div class="form-group">
					{!! Form::submit('registrar',['class'=>'btn btn-primary'])!!}
				</div>



				{!! Form::close()!!}
			</div>	
		</div>

@endsection

