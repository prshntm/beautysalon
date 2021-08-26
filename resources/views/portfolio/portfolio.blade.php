@extends('base')
	@section('title-block')
	Портфолио
	@endsection
	@section('content')
		<main>
			<div class="container">
				<div class="row">
					<h1 style="text-align: center;">{{$staff->first_name}} <span class="colortext"> {{$staff->second_name}}</span></h1>
				</div>
				<div class="row">
					<h2 style="text-align: center; size: 48px;">Парикмахер-стилист</h2>
				</div>
				<div class="row d-flex justify-content-center">
				@foreach ($gallery->photos as $photo)
					<div class="col-lg-3 col-md-4 col-6 thumb">
						<a data-fancybox="gallery" href="{{ asset("$gallery->gallery_src/$photo->photo_src") }}">
						<img src="{{ asset("$gallery->gallery_src/$photo->photo_src") }}" alt="" class="img-fluid">
						</a>
					</div>
				@endforeach
				</div>
				<div class="row" style="margin-top: 60px;">
					<h3 style="text-align: left;">Отзывы</h3>
				</div>
				@foreach ($feedbacks as $feedback)
				<div class="row">
					<h4 style="text-align: left;">{{$feedback->user->name}}</h4>
				</div>
				<div class="row">
					<p style="text-align: left;">{{$feedback->feedback_text}}</p>
				</div>
				@endforeach
				<div class="form-wrap">
					<div class="feedback">
						<h3>Оставить отзыв</h3>
					</div>
					<form method="post" action="/portfolio/{{$staff->id}}">
						@csrf
						<div>
							@if (Auth::check() && Auth::user()->name != null)
							<input type="text" name="name" value="{{Auth::user()->name}}" class="form-control @error('name') is-invalid @enderror" placeholder="Имя" style="width: 50%;">
							@else
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Имя" style="width: 50%;">
							@endif
							@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
								<input type="hidden" name="staff_id" value="{{$staff->id}}">
								@if (Auth::check())
								<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
								@endif
							<input type="text" name="feedback_text" class="form-control @error('feedback_text') is-invalid @enderror" placeholder="Ваш отзыв" style="height: 90px;">
							@error('feedback_text')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
						</div>
						<button type="submit">Отправить</button>
					</form>
				</div>
			</div>
			<script src="jquery-3.6.0.js"></script>
			<script src="popper.min.js"></script>
			<script src="bootstrap.min.js"></script>
			<script src="jquery.fancybox.min.js"></script>
		</main>
	@endsection