<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Chismorreo</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900')}}" rel="stylesheet">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/one-page-wonder.min.css')}}" rel="stylesheet">

</head>

<body>
    @extends('layouts.navPrincipal')
    
    @yield('contenido')
  
  

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>