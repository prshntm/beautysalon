@extends('base')
	@extends('header')
	@section('title-block')
	Онлайн-запись
	@endsection
	@section('content')
	<main>
		<div class="container">
			<div class="row" style="text-align: center;">
				<h1>Записаться</h1>
			</div>
			<div class="row">
				<div class="col-12 col-lg-4 d-flex justify-content-center" style="margin-left: -8%;">
					<div class="vertmenu">
						<ul>
								<li>
					            <input type="checkbox" class="subCat" id="1"/>
					            <label class="chka" for="1"></label>
					            <a href="/appointment/services">Выбор услуги</a>
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
					<div class="row" style="color: #8f1717; margin-left: 5%;">
						<h2>Выбор мастера</h2>
					</div>
					@foreach ($staff as $employee)
						<div class="row d-flex justify-content-right" style="margin-top: 3%; ">
						<div class="col-3" style="overflow: hidden;width: 150px; height:150px;">
							<img src="{{ asset("$employee->staff_picture") }}" alt="workerpic" class="workerpic">
						</div>
						<div class="col-7">
							<div class="row">
								<h3>{{$employee->first_name}} {{$employee->second_name}}</h3>
							</div>
							<div class="row">
								@foreach ($employee->jobs as $employ)
                                <h6 name="job">{{$employ->job_name}}</h6>
                                @endforeach
							</div>
						</div>
						<div class="col-2">
							<div class="row">
								<button>
								<a href="/servicelist/{{$employee->id}}">Записаться</a>
							</button>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</main>
	@endsection