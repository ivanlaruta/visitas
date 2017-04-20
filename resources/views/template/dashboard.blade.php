
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel Visitas</title>
    
    
    <link href="{{ asset('libs/sbadmin/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('libs/sbadmin/css/sb-admin.css')}}" rel="stylesheet">

    <link href="{{ asset('libs/sbadmin/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">

    <link href="{{ asset('libs/sbadmin/css/plugins/morris.css')}}" rel="stylesheet">

    <link href="{{ asset('libs/sbadmin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('libs/datepicker/css/bootstrap-datepicker.css')}}" >

   
</head>

<body>

    <div id="wrapper">
        @include('template.partials.dash_nav')
        <div id="page-wrapper">
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <section>
                                @if(!session('mensaje')==null)
                                         <div class="alert alert-success">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {!! session('flash_notification.message') !!}
                                             {{session('mensaje')}}
                                         </div>
                                @endif﻿
                                @if(!session('mensaje2')==null)
                                         <div class="alert alert-danger">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {!! session('flash_notification.message') !!}
                                             {{session('mensaje2')}}
                                         </div>
                                @endif﻿
                            </section>
                        </div>
                    </div>
                   {{--  style="background-color:#80c0e0;" --}}
                    <section >
                    <div class="row">
                        <div class="col-lg-12">
                            @include('template.partials.panel_head')
                                @yield('content')
                            @include('template.partials.panel_foot') 
                        </div>
                    </div>    
                    </section>
    {{-- 
                    @if(Auth::user()->id_rol==1  )
                         @include('admin.template.partials.nav')

                      <section>
                        @yield('content')
                         </section>
                    @endif

                    @if(Auth::user()->id_rol==0  )
                         @include('admin.template.partials.nav') 

                      <section>
                        @yield('content')
                         </section>
                    @endif --}}
                </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/js/jquery-3.2.0.js')}}"></script>
    {{-- <script src="../vendor/jquery/jquery.min.js"></script> --}}

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('libs/sbadmin/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" charset="utf8" src="{{ asset('plugins/jquery/js/jquery.table2excel.js')}}"></script>
   <script type="text/javascript" charset="utf8" src="{{ asset('libs/datepicker/js/bootstrap-datepicker.min.js')}}"></script>

    <script type="text/javascript" charset="utf8" src="{{ asset('libs/DataTables/jquery.dataTables.js')}}"></script> 
    
    <script src="{{ asset('libs/sbadmin/vendor/datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('libs/sbadmin/vendor/datatables-plugins/dataTables.bootstrap.js')}}"></script>
    <script src="{{ asset('libs/sbadmin/vendor/datatables-responsive/dataTables.responsive.js')}}"></script> 
    
{{--  
    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('libs/sbadmin/js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{ asset('libs/sbadmin/js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ asset('libs/sbadmin/js/plugins/morris/morris-data.js')}}"></script> --}}    
    {{-- <script src="{{ asset('libs/sbadmin/dist/js/sb-admin-2.js')}}"></script> --}}

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

  @yield('scripts')
    
   


</body>

</html>
