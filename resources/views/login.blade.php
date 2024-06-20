@extends('layouts.template')

@section('title', 'iCaller - Login')

@section('content')

<section style="padding: 0">
	<div class="container">
		<div class="flexbox" style="height: calc(100dvh - 64px)">
			<div class="card-panel login-wrapper">
				<form action="{{url('auth/login')}}" method="post" name="login-form" class="row">
					<div class="input-field col s12">
						@csrf
						<input type="email" id="email" name="email">
						<label for="email">Email Address</label>
					</div>

					<div class="input-field col s12">
						<input type="password" id="password" name="password">
						<label for="password">Password</label>
					</div>

					<div class="col s12">
						<p>
							<label>
								<input type="checkbox">
								<span>Remember Me</span>
							</label>
						</p>
					</div>

					<div class="input-field col s12">
						<button class="btn-large full-width" name="loginBtn" value="login">Login</button>
					</div>
					
					<div class="input-field col s12">
						<a href="{{url('register')}}" class="btn-flat btn-large full-width">Don't have an account? Register now</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection