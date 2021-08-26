<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@extends('header')
	@section('title-block')
	Редактировать профиль
	@endsection
</head>

@include('header')
<body>
	<main>
		<div class="container d-flex justify-content-center">
			<div class="row" style="text-align: center; position: absolute; margin-top: 10px">
				<h1>Личный кабинет</h1>
			</div>
			<div class="form-wrap-personal">
				<div class="col d-flex justify-content-center">
					<form method="post" action="">
				<div>
					<label for="name">Имя</label>
					<input type="text" name="name">
					<label for="email">E-mail</label>
					<input type="email" name="email" required>
				</div>
				<div>
					<fieldset>
						<legend>Смена пароля</legend>
					<label for="password">Пароль</label>
					<input type="password" name="password">
					<label for="password">Новый пароль</label>
					<input type="password" name="password">
					<label for="password">Подтверждение нового пароля</label>
					<input type="password" name="password">
					</fieldset>
				</div>
				<div class="button__savechanges">
				<button type="submit">Сохранить изменения</button></div>
			</form>
				</div>
			</div>
		</div>
	</main>
</body>
@include('footer')
</html>