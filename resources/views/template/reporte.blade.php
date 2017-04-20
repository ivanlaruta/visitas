<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte</title>
	<style>
	body {
   		 font-family: Arial, Helvetica, sans-serif;
	}
	table {
	    border-collapse: collapse;
	    width: 100%;
	}
	th, td {
	    text-align: left;
	    padding: 6px;
	    font-size: xx-small;
	}
	tr:nth-child(even){background-color: #f2f2f2}
	th {
	    background-color: #000;
	    color: white;
	}
	
	td {
	    font-weight: lighter !important;
	}
	.text-success {
	  color: #3c763d;
	}
	.text-primary {
	  color: #428bca;
	}
	.text-info {
	  color: #31708f;
	}
	.text-danger {
	  color: #a94442;
	}
	.text-warning {
  	  color: #8a6d3b;
	}
	.cabecera {
   		  background-color: #dedede;

	}
	.secundario {
   		  color: #428bca;
   		  text-align: right;
			font-size: xx-small;
	}
	.filtro {
   		  color: #787878;
   		  text-align: center;
		  font-size: xx-small;
	}
	.tituloRep {
   		  text-align: center;
	}
	.titulo{
		color: red;
   		text-align: right;
   		font-weight: bold;
	}
	</style>
</head>
	<body>
		<div>
	  		<div class="titulo">TOYOSA S.A.</div>
	  		<div class="secundario">{{ Auth::user()->empleado->ubicacion->nombre }}  |  <?php date_default_timezone_set('America/La_Paz'); $time = time(); echo date("d-m-Y H:i:s", $time);?>
	  		</div>
	  	</div>
	  	<hr>
	  	<section >
	  		@yield('content')
		</section>
	<script src="{{ asset('plugins/jquery/js/jquery.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>