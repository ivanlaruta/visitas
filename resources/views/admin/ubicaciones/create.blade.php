@extends('template.dashboard')

@section('ventana','crear Ubicacion')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  			  			
				{!! Form::open(['route'=>'ubicaciones.store','method'=>'POST'])!!}

				<div class="form-group">

					{!! Form::label('id','ID')!!}
					{!! Form::text('id_ubicacion',null,['class'=> 'form-control','placeholder'=>'Ingrese un Identificador','required'])!!}
					{!! Form::label('nombre','Nombre del lugar')!!}
					{!! Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingrese el nombre del lugar','required'])!!}
					
					<div class="form-group">
					{!! Form::label('ciudad','Ciudad')!!}
						{!! Form::select('ciudad',$ciudad,null,['class'=>'form-control','placeholder'=>'seleccione una ciudad','required'])!!}
					</div>
					{!! Form::label('dir','Direccion')!!}
					{!! Form::text('direccion',null,['class'=> 'form-control','placeholder'=>'Ingrese direccion','required'])!!}
				</div>
				
				<div class="form-group">
					{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>
	
@endsection

