<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes"> <!--initial-scale=1.0-->
	<title>@yield('title-block')</title>
	<link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<header id="header" class="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 ml-auto">
				<img src="{{ asset('logo.png') }}" alt="wellaart" class="logo" style="width: auto;
								height: 100%;
								position: absolute;
								left:10%; top:0;">
				</div>
			<div class="col-lg-9 ml-auto"> <!--отбрысвание сегментов меню вправо-->
				<nav><!--меню всегда должно находиться в этом тэге-->
					<ul class="menu d-flex justify-content-center"> <!--растягивание по всей длине, а не расположение ссылок в колонку-->
						<li class="menu__item">
							<a href="/mainpage">
								Главная
							</a>
						</li>
						<li class="menu__item">
							<a href="/servicelist">
								Услуги
							</a>
						</li>
						@if(Auth::check())
						@if (Auth::user()->is_admin == 1)
						<li class="menu__item">
							<a href="/adminAppointment">
								Мастера
							</a>
						</li>
						@endif
						@endif
						<!--<li class="menu__item">
							<a href="/appointment">
								Записаться
							</a>
						</li>-->
						<li class="menu__item">
							<a href="{{asset('mainpage#location')}}">Локация</a>
						</li>
						<li class="menu__item">
							@if (Auth::check())
								<a href="/logout">
									Выйти
								</a>
							@elseif (!Auth::check())
								<a href="/login">
									Войти
								</a>
							@endif
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
</header>
<body>
	@yield('content')
</body>
<footer id="footer" class="footer">
	<div class="row d-flex justify-content-center" style="margin-top: 0.5%; margin-left: 8%;">
			<div class="col-lg-3 ml-auto">
				<a href="#" style="text-decoration: none; color: #fff; font-size: 12px;">Режим работы: 10:00 — 20:00</a>
			</div>
			<div class="col-lg-3 ml-auto">
				<a href="#" style="text-decoration: none; color: #fff; font-size: 12px;">Телефон:		+7 (421) 269-77-56</a>
				
			</div>
		</div>
		<div class="row d-flex justify-content-center" style="margin-left: 8%;">
			<div class="col-lg-3 ml-auto">
				<a href="https://www.instagram.com/beauty_wella_art/" style="text-decoration: none; color: #fff; font-size: 12px;">Instagram:	beauty_wella_art</a>
			</div>
			<div class="col-lg-3 ml-auto">
				<a href="#" style="text-decoration: none; color: #fff; font-size: 12px;">Адрес:	ул. Карла Маркса, 72а</a>
			</div>
		</div>
	</div>
</footer>
</html>