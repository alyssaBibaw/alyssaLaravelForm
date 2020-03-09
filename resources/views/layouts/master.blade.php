<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>


	<!-- Custom styles for this template -->
  	<link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  	<!-- Custom styles for this template -->
  	<link href="{{URL::asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
  	<!-- Custom styles for this page -->
	<link href="{{URL::asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


</head>
<body id="page-top">

	@yield('content')
	@yield('sidebar')
	@yield('form')

	<!-- Bootstrap core JavaScript-->
    <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

     <!-- Custom scripts for all pages-->
    <script src="{{URL::asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{URL::asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{URL::asset('js/demo/datatables-demo.js')}}"></script>

    <!-- Sweet alert script -->
    <script src="{{URL::asset('vendor/sweetalert/sweetalert.min.js')}}"></script>


    <!-- Sweet alert script -->
    <script src="{{URL::asset('vendor/sweetalert/sweetalert.all.js')}}"></script>


    <!-- @include('sweetalert::alert') -->

    
</body>
</html>


