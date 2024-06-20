<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Unauthorized Access</title>

	{{-- <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}"  media="screen,projection"/> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"  media="screen,projection"/>

	<!-- GOOGLE ICONS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

	<div class="flexbox" style="flex-direction: column; justify-content: center; align-items: center; height: 100dvh">
		<div class="row">
			<div class="col s12 m6 l4 offset-m3 offset-l4 center-align">
				<img src="{{asset('images/11132.jpg')}}" alt="" class="responsive-img">
				<h4>This user doesn't have permissions!</h4>
				<p><a href="{{url('user/dashboard')}}">Go back to Dashboard</a></p>
			</div>
		</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script>
		M.AutoInit()
	</script>
</body>
</html>