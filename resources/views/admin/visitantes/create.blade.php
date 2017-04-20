@extends('template.dashboard')

@section('ventana','crear visitante')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  			  		
				{!! Form::open(['route'=>'visitantes.store','method'=>'POST'])!!}

				
				
				<div class="form-group">
					<div class="form-group">
					{!! Form::label('id','CI')!!}
					</div>
					<div class="form-group">
					{!! Form::text('ci',null,['class'=> 'form-control','placeholder'=>'ci','required'])!!}
					</div>
					
					<div class="form-group">
						<h6>Expedido</h6>
						{!! Form::select('ex',$expe,null,['class'=>'form-control','placeholder'=>'Expedido','required'])!!}
					</div>
		      
					<div class="form-group">
					{!! Form::label('nom','Nombre')!!}
					</div>
					<div class="form-group">
					{!! Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'nombre','required'])!!}
					</div>
					<div class="form-group">
					{!! Form::label('pat','Paterno')!!}
					</div>
					<div class="form-group">
					{!! Form::text('paterno',null,['class'=> 'form-control','placeholder'=>'paterno','required'])!!}
					</div>
					<div class="form-group">
					{!! Form::label('materno','Materno')!!}
					</div>
					<div class="form-group">
					{!! Form::text('materno',null,['class'=> 'form-control','placeholder'=>'materno','required'])!!}
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

