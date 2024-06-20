<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>

	{{-- <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}"  media="screen,projection"/> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"  media="screen,projection"/>

	<!-- GOOGLE ICONS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
</head>
<body>

	<nav>
		<div class="nav-wrapper container">
			<a href="#!" class="brand-logo">iCaller</a>
			<ul class="right">
				<li><a href="#!">Products</a></li>
				<li><a href="#!">Platform</a></li>
				<li><a href="#!">Pricing</a></li>
				<li><a href="{{ url('login') }}" class="btn">Account</a></li>
			</ul>
		</div>
	</nav>

	@yield('content')
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="{{asset('js/script.js')}}"></script>
</body>
</html>