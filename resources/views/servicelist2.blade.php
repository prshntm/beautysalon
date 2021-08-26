<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@extends('header')
	@section('title-block')
	Список услуг
	@endsection
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="app.css">
</head>

@include('header')
<body>
	<main>
		<div class="container">
			<div class="row" style="text-align: center;">
				<h1>Список <span class="colortext">услуг</span></h1>
			</div>
			<div class="row">
				<!--<div class="col col-lg-4 d-flex justify-content-center">
					<img src="servicelist.jpg" alt="servicelist" class="servicelistpic">
				</div>-->
				<div class="col-12 col-lg-4 d-flex justify-content-center" style="margin-left: -8%;">
					<div class="vertmenu">
						@foreach ($categories as $category)
						<ul>
								<li>
					            <input type="checkbox" class="subCat" id="{{$category->category_id}}"/>
					            <label class="chka" for="{{$category->category_id}}"></label>
					            <a href="#">{{$category->category_name}}</a>
					            <ul style="display:none;">
					            	@foreach ($category->children as $cat)
					                <li style=" border-color:#ffffff; padding: 1%;">
					                    <a class="active" href="/servicelist/{{$staff_id}}/{{$cat->id}}" name="cat_id">{{$cat->category_name}}</a>
					                </li>
					                @endforeach
					            </ul>
					        </li>
						</ul>
						@endforeach
					</div>
				</div>
				<div class="col col-lg-8" style="text-align: center">
					@foreach($services as $serv)
					<div class="row d-flex justify-content-right">
						<div class="col-6" for="{{$serv->id}}">
							<div class="row">
								<h3>{{$serv->service_name}}</h3>
							</div>
							<div class="row">
								<p>Длительность: {{$serv->duration}} минут</p>
							</div>
						</div>
						<div class="col-3">
							<h4>от {{$serv->price_min}}₽</h4>
						</div>
						<div class="col-3">
							<button>
								@if (Auth::check())
								<a href='/makeappointment/{{$staff_id}}/{{$serv->id}}'>
									Записаться
								</a>
								@else
								<a href='/login'> <!--login_page/?redirect_url="current_url"-->
									Записаться
								</a>
								@endif
							</button>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</main>
</body>
@include('footer')
</html>