@extends('service')
@section('title-block')
Список услуг
@endsection
				@section('content')
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
				@endsection
