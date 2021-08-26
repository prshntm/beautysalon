@extends('base')
	@section('title-block')
    Главная страница
    @endsection
	@section('content')
	<main>
		<div class="container">
			<!--<div class="row" style="text-align: center;">
				<h1>Список <span class="colortext">услуг</span></h1>
			</div>-->
			<div class="row d-sm-none" style="position: relative; padding-top: 5%; text-align: center;">
				<h1>Список <span class="colortext">услуг</span></h1>
			</div>
			<div class="row d-none d-lg-block" style="position: relative; text-align: center;">
				<h1>Список <span class="colortext">услуг</span></h1>
			</div>
			<div class="row">
				<!--<div class="col col-lg-4 d-flex justify-content-center">
					<img src="servicelist.jpg" alt="servicelist" class="servicelistpic">
				</div>-->
				<div class="col-12 col-lg-4 d-flex justify-content-center" style="margin-top: 3%;"><!--margin-left: -2%; -->
					<div class="vertmenu">
						@foreach ($categories as $category)
						<ul>
								<li>
					            <input type="checkbox" class="subCat" id="{{$category->id}}"/>
					            <label class="chka" for="{{$category->id}}"></label>
					            <a href="#">{{$category->category_name}}</a>
					            <ul style="display:none;">
					            	@foreach ($category->children as $cat)
					                <li style=" border-color:#ffffff; padding: 1%;">
					                    <a class="active" href="/servicelist/{{$cat->id}}" name="cat_id">{{$cat->category_name}}</a>
					                </li>
					                @endforeach
					            </ul>
					        </li>
						</ul>
						@endforeach
					</div>
				</div>
				<div class="col col-lg-8" style="text-align: center; margin-top: 3%;">
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
							<button style="width: 95px;">
								@if (Auth::check())
								<a href='/appointment/{{$serv->id}}'> <!--login_page/?redirect_url="current_url"-->
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
@endsection