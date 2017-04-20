@extends('template.dashboard')
@section('title','Lista de visitas')
@section('content')
@section('ventana','Visitas de todas las Visitas')	
	<table width="100%" class="table table-hover table-striped" id="todo">
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
				<th>estado</th>
	        </tr>
	    </thead>
	    <tbody>	        
			@foreach($vi as $vis)
				@if($vis -> fecha_entrada < $vis -> fecha_salida)
						<tr class="warning">
				@else
					@if(is_null($vis -> hora_salida))
						<tr class="danger">
					@else
						<tr class="success">	
					@endif
				@endif
				<td>{{ $vis -> ci_visitante }}</td>
				<td>{{ $vis -> visitante -> ex}}</td>
				<td>{{ $vis -> tipo_doc }}</td>
				<td>{{ $vis -> visitante -> nombre }}  {{ $vis -> visitante -> paterno }}
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

<button class= "btn btn-success">Imprimir</button>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // alert('1');
        $('#todo').DataTable({
            
            responsive: true

        });
    });


    function printData()
	{
		var	html = "";
	    
		html+='<!DOCTYPE html>';
		html+='<html lang="en">';
		html+='<head>';
		html+='<meta charset="UTF-8">';
		html+='<title></title>';
		html+='<style>';
		html+='body {';
		html+='font-family: Arial, Helvetica, sans-serif;';
		html+='}';
		html+='table {';
		html+='border-collapse: collapse;';
		html+='width: 100%;';
		html+='}';
		html+='th, td {';
		html+='text-align: left;';
		html+='padding: 6px;';
		html+='font-size: xx-small;';
		html+='}';
		html+='tr:nth-child(even){background-color: #f2f2f2}';
		html+='th {';
		html+='background-color: #000;';
		html+='color: white;';
		html+='}';
		html+='';
		html+='td {';
		html+='font-weight: lighter !important;';
		html+='}';
		html+='.text-success {';
		html+='color: #3c763d;';
		html+='}';
		html+='.text-primary {';
		html+='color: #428bca;';
		html+='}';
		html+='.text-info {';
		html+='color: #31708f;';
		html+='}';
		html+='.text-danger {';
		html+='color: #a94442;';
		html+='}';
		html+='.text-warning {';
		html+='color: #8a6d3b;';
		html+='}';
		html+='.cabecera {';
		html+='background-color: #dedede;';
		html+='';
		html+='}';
		html+='.secundario {';
		html+='color: #428bca;';
		html+='text-align: right;';
		html+='font-size: xx-small;';
		html+='}';
		html+='.filtro {';
		html+='color: #787878;';
		html+='text-align: center;';
		html+='font-size: xx-small;';
		html+='}';
		html+='.tituloRep {';
		html+='text-align: center;';
		html+='}';
		html+='.titulo{';
		html+='color: red;';
		html+='text-align: right;';
		html+='font-weight: bold;';
		html+='}';
		html+='</style>';
		html+='</head>';
		html+='<body>';
		html+='<div>';
		html+='<div class="titulo">TOYOSA S.A.</div>';
		html+='<div class="secundario">{{ Auth::user()->empleado->ubicacion->nombre }}  |  <?php $time = time(); echo date("d-m-Y H:i:s", $time);?>';
		html+='</div>';
		html+='</div>';
		html+='<hr>';
		html+='<section >';

		html+='<div><div class="tituloRep"> REPORTE PERSONALIZADO VISITAS</div></div><hr>';
		html+='<table width="100%" class="table table-hover table-striped" id="todo">';


	   var divToPrint=document.getElementById("todo");
	   newWin= window.open("");
	   newWin.document.write(html+divToPrint.outerHTML);
	   newWin.print();
	   newWin.close();
	}

	$('button').on('click',function(){
	printData();
	})

    </script> 
@endsection