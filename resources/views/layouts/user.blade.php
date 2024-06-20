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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body class="grey lighten-4">

	<ul id="slide-out" class="sidenav sidenav-fixed">
		<li>
			<div class="user-view">
				<div class="user-thumbnail">
					VD
				</div>
				<a href="#name"><span class="name">Vipin Daksh</span></a>
				<a href="#email"><span class="email" style="font-size: 0.8rem">sayan@quickbookproadvisors.us</span></a>
			</div>
		</li>
		<li><a href="{{url('user/dashboard')}}"><i class="material-symbols-rounded left">dashboard</i>Dashboard</a></li>
		<li><a href="{{url('user/logs')}}"><i class="material-symbols-rounded left">call_log</i>Call Logs</a></li>
		<li><a href="{{url('user/numbers')}}"><i class="material-symbols-rounded left">tag</i>Numbers</a></li>
		<li><a href="{{url('user/unauthorized')}}"><i class="material-symbols-rounded left">manage_accounts</i>Contacts</a></li>
		<li><a href="{{url('user/unauthorized')}}"><i class="material-symbols-rounded left">settings</i>Settings</a></li>
		<li><div class="divider"></div></li>
		<li><a class="subheader">User</a></li>
		<li><a href="#dialer" class="dialpad-modal"><i class="material-symbols-rounded left">dialpad</i>Dial</a></li>
		<li><a href="{{url('user/logout')}}"><i class="material-symbols-rounded left">logout</i>Logout</a></li>
	</ul>

	<main>
		@yield('content')
	</main>

	<div id="dialer" class="modal dialer-modal white">
		<div class="modal-content">

			<p class="center-align red-text" data-error><span class="white-text">.</span></p>

			<div class="card-panel z-depth-0 center-align" style="background-color: #eee; min-height: 93px">
				<span style="font-size: 2rem" data-screen></span>
			</div>

			<br>

			<div class="dialpad">
				<div class="rows">
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="1">1</a>
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="2">2</a>
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="3">3</a>
				</div>
				<div class="rows">
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="4">4</a>
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="5">5</a>
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="6">6</a>
				</div>
				<div class="rows">
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="7">7</a>
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="8">8</a>
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="9">9</a>
				</div>
				<div class="rows">
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="#">#</a>
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="0">0</a>
					<a href="#!" class="btn-flat btn-large dialpad-btn" data-value="*">*</a>
				</div>
				<div class="rows">
					<a href="#!" class="btn-flat btn-large disabled"></a>
					<a href="#!" class="btn-flat btn-large call-btn"><i class="material-symbols-rounded green-text">phone</i></a>
					<a href="#!" class="btn-flat btn-large disabled"></a>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script>
		M.AutoInit()

		let number = []

		document.addEventListener('click', (e) => {
			const dialpad = e.target.closest('.dialpad-btn')
			if (dialpad) {
				e.preventDefault()
				number.push(dialpad.dataset.value)
				document.querySelector('[data-screen]').innerText = ''
				
				for (const item of number) {
					document.querySelector('[data-screen]').innerText += item
				}
			}

			const callBtn = e.target.closest('.call-btn')
			if (callBtn) {
				e.preventDefault()
				document.querySelector('[data-error]').innerText = 'You dont have dialing permissions.'
			}
		})

		document.querySelector('.dialpad-modal').addEventListener('click', (e) => {
			e.preventDefault()
			const instance = M.Modal.getInstance(document.querySelector('#dialer'))
			instance.open()
			number = []
		})



		document.addEventListener('DOMContentLoaded', (e) => {
			

		})
	</script>

	<!-- Custom JS -->
	@yield('script')
</body>
</html>