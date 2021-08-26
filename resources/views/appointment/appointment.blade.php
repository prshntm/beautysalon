@extends('base')
	@extends('header')
	@section('title-block')
	Онлайн-запись
	@endsection
	@section('content')
	<main>
		<div class="container">
			<!--<div class="row" style="text-align: center;">
				<h1>Записаться</h1>
			</div>-->
			<div class="row d-sm-none"  style="position: relative; padding-top: 5%; text-align: center;">
				<h1>Записаться</h1>
			</div>
			<div class="row d-none d-lg-block" style="position: relative; text-align: center;">
				<h1>Записаться</h1>
			</div>
			<div class="row">
				<div class="col-12 col-lg-4 d-flex justify-content-center"><!-- style="margin-left: -8%;"-->
					<div class="vertmenu">
						<ul>
								<li>
					            <input type="checkbox" class="subCat" id="1"/>
					            <label class="chka" for="1"></label>
					            <a href="/appointment/service">Выбор услуги</a>
					        	</li>
					        	<li>
					            <input type="checkbox" class="subCat" id="2"/>
					            <label class="chka" for="2"></label>
					            <a href="#">Выбор мастера</a>
					        	</li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-lg-8" style="text-align: center;">
					<div class="row" style="color: #8f1717;"> <!-- margin-left: 5%;-->
						<h2>Выбор мастера</h2>
					</div>
					@foreach ($staff as $employee)
						<div class="row d-flex justify-content-right" style="margin-top: 3%; ">
						<div class="col-xs-12 col-sm-12 col-lg-4" style="overflow: hidden;">
							<img src="{{ asset("$employee->staff_picture") }}" alt="workerpic" class="workerpic" style="width: 150px; height:150px;">
						</div>
						<div class="col-xs-12 col-sm-12 col-lg-4" style="position: relative;">
							<div class="row">
								<h3>{{$employee->first_name}} {{$employee->second_name}}</h3>
							</div>
							<div class="row">
								@foreach ($employee->jobs as $employ)
                                <h6 name="job">{{$employ->job_name}}</h6>
                                @endforeach
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-lg-4">
							<div class="row justify-content-center">
								<button style="width: 110px;">
								<a href="/makeappointment/{{$serv_id}}/{{$employee->id}}">Записаться</a>
							</button>
							</div>
						</div>
					</div>
					@endforeach
			</div> 
		</div>
	</main>
	@endsection