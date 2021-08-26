@extends('base')
	@section('title-block')
    Главная страница
    @endsection
	@section('content')
	<main>
		<div class="container">
			<div class="row" style="text-align: center;">
				<h1>Расписание</h1>
			</div>
			<div class="row">
				@if(count($errors) > 0)
					<!--Проверка на ошибки-->
					<div class="alert alert-danger justify-content-center" style="width: 400px; height: 130px; text-align: center; margin-top: 20px; margin-left: -40px;">
							@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
							@endforeach
					</div>
					@endif
					@if ($message = Session::get('success'))
					<div class="alert alert-success justify-content-center" style="width: 400px; height: 60px; text-align: center; margin-top: 20px; margin-left: 350px;">
							{{$message}}
					</div>
					@endif
				<table>
					<thead>
						<tr>
							<th>Услуга</th>
							<th>Дата</th>
							<th>Время</th>
							<th>Клиент</th>
							<th>Email</th>
							<th>Стоимость</th>
							<th colspan="3" style="text-align: center;">Действие</th>
							<th style="display: none;">id</th>
						</tr>
						@foreach ($staff as $employee)
						<tr>
							<td colspan="8" style="text-align: left; font-weight: bold; font-size: 13px; text-align: center;">{{$employee->first_name}} {{$employee->second_name}}</td>
						</tr>
						@foreach ($appointments as $appointment)
						@if ($employee->id == $appointment->staff_id)
						<tr>
						<form action="/adminAppointment/{{$appointment->id}}" method="post">
							@csrf
							<td>{{$appointment->services->service_name}}</td>
							<td>{{$appointment->appoint_date}}</td>
							<td>{{$appointment->time_start}}</td>
							<td>{{$appointment->users->name}}</td>
							<td>{{$appointment->users->email}}</td>
							<td>{{$appointment->services->price_min}}₽</td>
							<td><button type="submit">Удалить</button></td>
							<td><div class="modify"><button type="submit">Изменить</button> <button type="submit" style="display: none;">Применить</button></div></td>
							<td style="display: none;">{{$appointment->id}}</td>
						</tr>
						@endif
						@endforeach
						@endforeach
						</form>
					</thead>
				</table>
			</div>
		</div>
	</main>
	@endsection