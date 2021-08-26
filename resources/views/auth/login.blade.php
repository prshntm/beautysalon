@extends('base')
	@section('title-block')
	Авторизация
	@endsection
	@section('content')
	<main>
		<div class="container d-flex justify-content-center">
			<div class="row d-sm-none" style="position: absolute; padding-top: 5%; text-align: center;">
				<h1>Войти</h1>
			</div>
			<div class="row d-none d-lg-block" style="position: absolute; text-align: center;">
				<h1>Войти</h1>
			</div>
				<!--Проверка на ошибки-->
			<div class="form-wrap-authorize d-flex justify-content-center">
				<div class="col-7 justify-content-center">
					@if ($message = Session::get('success'))
					<div class="alert alert-success justify-content-center" style="width: 400px; height: 100px; text-align: center; margin-top: 20px; margin-left: -40px;">
							{{$message}}
					</div>
					@endif
							<form method="post" action="{{route('login')}}">
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
						<div>
							<label for="password">Пароль</label>
							<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>
						<div class="button__authorize">
							<button type="submit">Войти</button>
						</div>
					</form>
					<div class="row" style="text-align: center; margin-top: 3%;">
						<a href="/forgot-password">Забыли пароль?</a>
					</div>
					<form action="{{route('register')}}" method="get">
						<div>
							<p>Вы у нас впервые?</p>
						</div>
						<div class="button__signup">
						<button> <a href="/register"></a>Зарегистрироваться</button></div>
					</form>
				</div>
				
			</div>
			
		</div>
	</main>
	@endsection