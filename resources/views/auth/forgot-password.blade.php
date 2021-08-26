@extends('base')
@section('title-block')
Восстановление пароля
@endsection
@section('content')
	<main>
		<div class="container d-flex justify-content-center">
			<!--<div class="row" style="text-align: center; position: absolute; margin-top: 10px">
				<h1>Забыли пароль?</h1>
			</div>-->
			<div class="row d-sm-none" style="position: absolute; padding-top: 5%; text-align: center;">
				<h1>Забыли пароль?</h1>
			</div>
			<div class="row d-none d-lg-block" style="position: absolute; text-align: center;">
				<h1>Забыли пароль?</h1>
			</div>
			<div class="row" style="text-align: center; position: absolute; margin-top: 60px;">
				<h5>Введите свой адрес электронной почты. На него придёт письмо, информирующее о сбросе пароля</h5>
			</div>
				<!--Проверка на ошибки-->
			<div class="form-wrap-authorize d-flex justify-content-center">
				<div class="col-7 justify-content-center">
					@if ($message = Session::get('success'))
					<div class="alert alert-success justify-content-center" style="width: 400px; height: 100px; text-align: center; margin-top: 70px; margin-left: -50px;">
							{{$message}}
					</div>
					@endif
					<form method="post" class="d-none d-lg-block" action="{{route('password.email')}}" style="margin-top: 80px;">
								@csrf <!--Защищённый ключ. При отправке данных из формы он проверяется, и если он передан корректно, то форма отправлена корректно-->
						<div>
							<label for="email">E-mail</label>
							<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>
						<div class="button__authorize">
							<button type="submit">Отправить</button>
						</div>
					</form>
					<form method="post" class="d-sm-none" action="{{route('password.email')}}" style="margin-top: 45%;">
								@csrf <!--Защищённый ключ. При отправке данных из формы он проверяется, и если он передан корректно, то форма отправлена корректно-->
						<div>
							<label for="email">E-mail</label>
							<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>
						<div class="button__authorize">
							<button type="submit">Отправить</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
@endsection