<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toyosa Visitas</title>

    
    <!-- Bootstrap Core CSS -->
    {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('libs/grayscale/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Custom Fonts -->
    <link href="{{ asset('libs/grayscale/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    {{-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="{{ asset('libs/grayscale/css/grayscale.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

   @if (Auth::guest())
            @include('template.partials.inicio_nav')
                @else               
                        @if(Auth::user()->id_rol==1 )
                            @include('template.partials.inicio_nav')
                                                   
                        @else                       
                            @include('template.partials.inicio_nav')
                            
                        @endif      
    @endif

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <br>
                        <h1 class="brand-heading">TOYOSA S.A.</h1>
                         @if (Auth::guest())
                         <a href="{{ route('login') }}" class="btn btn-default btn-lg">SISTEMA DE CONTROL DE VISITAS | INICIO</a>
                         @else               
                        @if(Auth::user()->id_rol==1 )
                           <a href="{{ route('users.index')}}" class="btn btn-default btn-lg">SISTEMA DE CONTROL DE VISITAS | INICIO</a>
                        @else                       
                           <a href="{{ route('visitas.index')}}" class="btn btn-default btn-lg">SISTEMA DE CONTROL DE VISITAS | INICIO</a>
                        @endif      
                         @endif
                       
                        <br><br>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Download Section -->
    <section id="about" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>SISTEMA DE CONTROL DE VISITAS</h2>
                    <p>El sistema permite registrar a visitantes y marcar las horas de entrada y salida de las visitas realizadas, ademas genera reportes con los datos obtenidos.</p>

                    <a href="#page-top" class="btn btn-default btn-lg">Visite la pagina oficial</a>


                </div>
            </div>
        </div>
    </section>
 

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <h6>Copyright &copy; SistemaVisitas TOYOSA S.A. 2017</h6>
            <h6>DEPARTAMENTO DE SISTEMAS</h6>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('libs/grayscale/vendor/jquery/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('libs/grayscale/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('libs/grayscale/js/grayscale.min.js')}}"></script>

</body>

</html>
