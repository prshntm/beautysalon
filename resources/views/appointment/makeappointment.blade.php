@extends('base')
	@section('title-block')
	Записаться
	@endsection
	@section('content')
	<main>
		<div class="container d-flex justify-content-center">
			<div class="row" style="text-align: center; position: absolute; margin-top: 10px">
				<h1>Записаться</h1>
			</div>
				
			<div class="form-wrap-authorize d-flex justify-content-center">
				<div class="col-7 justify-content-center">
					@if(count($errors) > 0)
					<!--Проверка на ошибки-->
					<div class="alert alert-danger justify-content-center" style="width: 400px; height: 130px; text-align: center; margin-top: 20px; margin-left: -40px;">
							@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
							@endforeach
					</div>
					@endif
					@if ($message = Session::get('success'))
					<div class="alert alert-success justify-content-center" style="width: 400px; height: 80px; text-align: center; margin-top: 20px; margin-left: -40px;">
							{{$message}}
					</div>
					@endif
					<form method="post" action="/makeappointment">
						@csrf
						<div>
							<label for="service">Ваше имя</label>
							@if(Auth::check() && Auth::user()->name != null)
							<input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" id="service">
							@else
							<input type="text" name="name" class="form-control" id="service">
							@endif
						</div>
						<div>
							<label for="service">Услуга</label>
							<input type="text" name="service" class="form-control" id="service" value="{{$service->service_name}}">
							<input type="hidden" name="service_id" class="form-control" id="service_id" value="{{$service->id}}">
						</div>
						<div>
							<label for="staff">Мастер</label>
							<input type="text" name="staff" class="form-control" id="staff" value="{{$staff->first_name}} {{$staff->second_name}}">
							<input type="hidden" name="staff_id" class="form-control" id="staff_id" value="{{$staff->id}}">
						</div>
						<div>
							<label for="dateToday">Выберите дату</label>
							<input type="date" name="dateToday" class="form-control" id="dateToday" value="dateToday"
    						max="2021-06-30" min="2021-06-01">
							<script>
							document.getElementById('dateToday').valueAsDate = new Date();
							</script>
						</div>
						<div>
							<label for="time_start">Выберите время</label>
							<select name="time_start">
							  <option name="time_start" value="10:00" id="time_start">10:00</option>
							  <option name="time_start" value="10:15" id="time_start">10:15</option>
							  <option name="time_start" value="10:30" id="time_start">10:30</option>
							  <option name="time_start" value="10:45" id="time_start">10:45</option>
							  <option name="time_start" value="11:00" id="time_start">11:00</option>
							  <option name="time_start" value="11:15" id="time_start">11:15</option>
							  <option name="time_start" value="11:30" id="time_start">11:30</option>
							  <option name="time_start" value="11:45" id="time_start">11:45</option>
							  <option name="time_start" value="12:00" id="time_start">12:00</option>
							  <option name="time_start" value="12:15" id="time_start">12:15</option>
							  <option name="time_start" value="12:30" id="time_start">12:30</option>
							  <option name="time_start" value="12:45" id="time_start">12:45</option>
							  <option name="time_start" value="13:00" id="time_start">13:00</option>
							  <option name="time_start" value="13:15" id="time_start">13:15</option>
							  <option name="time_start" value="13:30" id="time_start">13:30</option>
							  <option name="time_start" value="13:45" id="time_start">13:45</option>
							  <option name="time_start" value="14:00" id="time_start">14:00</option>
							  <option name="time_start" value="14:15" id="time_start">14:15</option>
							  <option name="time_start" value="14:30" id="time_start">14:30</option>
							  <option name="time_start" value="14:45" id="time_start">14:45</option>
							  <option name="time_start" value="15:00" id="time_start">15:00</option>
							  <option name="time_start" value="15:15" id="time_start">15:15</option>
							  <option name="time_start" value="15:30" id="time_start">15:30</option>
							  <option name="time_start" value="15:45" id="time_start">15:45</option>
							  <option name="time_start" value="16:00" id="time_start">16:00</option>
							  <option name="time_start" value="16:15" id="time_start">16:15</option>
							  <option name="time_start" value="16:30" id="time_start">16:30</option>
							  <option name="time_start" value="16:45" id="time_start">16:45</option>
							  <option name="time_start" value="17:00" id="time_start">17:00</option>
							  <option name="time_start" value="17:15" id="time_start">17:15</option>
							  <option name="time_start" value="17:30" id="time_start">17:30</option>
							  <option name="time_start" value="17:45" id="time_start">17:45</option>
							  <option name="time_start" value="18:00" id="time_start">18:00</option>
							  <option name="time_start" value="18:15" id="time_start">18:15</option>
							  <option name="time_start" value="18:30" id="time_start">18:30</option>
							  <option name="time_start" value="18:45" id="time_start">18:45</option>
							  <option name="time_start" value="19:00" id="time_start">19:00</option>
							</select>
						</div>
						<div class="button__authorize">
							<button>
								Записаться
							</button>
						</div>
					</form>
				</div>
				
			</div>
			
		</div>
	</main>
	@endsection