<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        
        <title>Laravel</title>        
    </head>
    <body>
        
    </body>
</html>

hola toyosa prueba
<br><br>


<table border="2px">
<tr>
	<td>ci_visitante</td>
	<td>tipo_doc</td>
	<td>nombre</td>
	<td>fecha</td>
	<td>hora_entrada</td>
	<td>hora_salida</td>
	<td>id_motivo</td>
	<td>ci_empleado</td>
	<td>id_tarjeta</td>
	<td>observaciones</td>
	<td>estado_visita</td>
	<td>creado_por</td>
	<td>modificado_por</td>
</tr>

<tr>

	<td>{{ $prueba->ci_visitante }}</td>
	<td>{{ $prueba->tipo_doc }}</td>
	<td>{{ $prueba->visitante->nombre}}</td>
	<td>{{ $prueba->fecha }}</td>
	<td>{{ $prueba->hora_entrada }}</td>
	<td>{{ $prueba->hora_salida }}</td>
	<td>{{ $prueba->motivo->descripcion }}</td>
	<td>{{ $prueba->ci_empleado }}</td>
	<td>{{ $prueba->id_tarjeta }}</td>
	<td>{{ $prueba->observaciones }}</td>
	<td>{{ $prueba->estado_visita }}</td>
	<td>{{ $prueba->creado_por }}</td>
	<td>{{ $prueba->modificado_por }}</td>
</tr>
