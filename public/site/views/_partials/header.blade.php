<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pemrograman Internet 4</title>
	<link href="{{ URL::asset('assets/css/bootstrap-combined.min.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">
	<script src="{{ URL::asset('assets/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/script.js') }}"></script>
</head>
<body>
<div class="container">
<header>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="{{ URL::route('home') }}">Laravel 4</a>
			@include('site::_partials.navigation')
		</div>
	</div>
</div>


</header><hr>
