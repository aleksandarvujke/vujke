@extends('layouts.layout')


@section('content')

<div class="login-wrapper">
		<div class="login-register-form">
			<div class="login">
				<div class="input-form">
				<form action="/login" method="post" id="login-form">

					@csrf

				<div class="form-group">
					<label for="username">Korisničko ime ili Email:</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Lozinka:</label>
					<input type="password" name="password" class="form-control">
				</div>
				<button class="btn-login">Ulogujte se</button>
				<p>Nemate kreiran nalog ?<a href="">Kreirajte nalog</a></p>
				<p class="close">+</p>
				</form>
				</div>
			</div>
			<div class="register">
				<div class="input-form">
				<form action="/register" method="post" id="register-form">

					@csrf

				<div class="form-group">
					<label for="name">Korisničko ime:</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Lozinka:</label>
					<input type="password" name="password" class="form-control">
				</div>
				<button class="btn-register">Kreirajte nalog</button>
				<p>Već imate nalog? <a href="">Ulogujte se ovde</a></p>
				<p class="close">+</p>
				</form>
				</div>
			</div>
		</div>
</div>


@endsection