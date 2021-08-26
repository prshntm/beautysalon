@extends('base')
	@section('title-block')
	Восстановить пароль
	@endsection
	@section('content')
	<main>
		<div class="container d-flex justify-content-center">
			<!--<div class="row" style="text-align: center; position: absolute; margin-top: 10px">
				<h1>Восстановить пароль</h1>
			</div>-->
			<div class="row d-sm-none" style="position: absolute; padding-top: 5%; text-align: center;">
				<h1>Восстановить пароль</h1>
			</div>
			<div class="row d-none d-lg-block" style="position: absolute; text-align: center;">
				<h1>Восстановить пароль</h1>
			</div>
			<div class="form-wrap-authorize d-flex justify-content-center">
				<div class="col-7 justify-content-center">
					<form method="post" action="{{route('password.update')}}">
								@csrf
								<input type="hidden" name="token" value={{$token}}>
						<div>
							<label for="email">E-mail</label>
							<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>
						<div>
							<label for="password">Пароль</label>
							<input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>
						<div>
							<label for="password">Повторить пароль</label>
							<input type="password" name="password_confirmation" class="form-control">
						</div>
						<div class="button__adduser" style="text-align: center;">
						<button type="submit">Восстановить</button></div>
					</form>
				</div>
			</div>
		</div>
	</main>
	@endsection