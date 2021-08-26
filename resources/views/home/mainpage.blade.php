@extends('base')
	@section('title-block')
    Главная страница
    @endsection
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='bootstrap-transition.js'></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('.carousel').carousel({
          interval: false
        })
      });
    </script>
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script type="text/javascript">
    var map;

    DG.then(function () {
        map = DG.map('map', {
            center: [48.487364, 135.082500],
            zoom: 25
        });
        DG.marker([48.487364, 135.082500]).addTo(map).bindPopup('Студия красота Wella Art');
    });
    </script>
	@section('content')
	    	<div class="container-fluid">
                <div class="row">
                    <div class="col" style="padding: 0;">
                    <img src="background.png" alt="">
                    <div class="row-fluid d-flex justify-content-center" style="">
                        <h1 style="text-align: center; position: absolute; top: 15%; left: 35%; background: #DCDCDC;">Студия красоты <span class="colortext">WELLA ART</span></h1>
                    </div>
                    <div class="row-fluid" style="text-align: center;">
                        <p style="  position: absolute; top: 24%; left: 18%; background: #696969; color:#DCDCDC; font-weight: bold;">Студия красоты Wella Art предоставляет все виды парикмахерских услуг от стрижки и окрашивания до перманентного макияжа
                        </p>
                    </div>
                    <div class="row-fluid" style="text-align: center;">
                    <p style="  position: absolute; top: 32%; left: 20%; background: #696969; color:#DCDCDC; font-weight: bold;">Наши мастера помогут Вам сменить имидж, поддержать Ваш нынешний образ и проконсультируют по любым вопросам</p>
                    </div>
                    <div class="row-fluid" style="text-align: center;">
                    <p style="  position: absolute; top: 28%; left: 25%; background: #696969; color:#DCDCDC; font-weight: bold;">К Вашим услугам парикмахеры, мастеры ногтевого сервиса, перманентного макияжа и визажисты</p>
                    </div>
               </div>
                </div>
				<div class="row-fluid" style="text-align: center;margin-top: 1%;">
					<h1>Наши <span class="colortext">мастера</span></h1>
				</div>
                   <div class="row-fluid d-flex justify-content-center" style="margin: 5px 5px 5px;
                        padding: 20px 40px 0;
                        max-width: 100%;">
                        <!--<form method="post" action="/portfolio/">-->
                        <div class="span12"  style="text-align: center;margin-top: 1%;">
                            <div class="carousel slide" id="myCarousel">
                                <div class="carousel-inner">
                                    <div class="item active" style="height: 347.5px;">
                                            <ul class="thumbnails">
                                                @foreach ($staff as $employee)
                                               
                                                @if ($employee['id'] == 5)
                                                @break
                                                @endif
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{$employee['staff_picture']}}" alt="" class="staff__pic"></a>
                                                    </div>
                                                    <div class="caption">
                                                        <h4>{{$employee['first_name']}} {{$employee['second_name']}}</h4>
                                                         @foreach ($employee->jobs as $employ)
                                                        <h6 name="job">{{$employ->job_name}}</h6>
                                                         @endforeach
                                                        <p style="padding: 5 5 5 5">{{$employee['bio']}}</p>
                                                        <div class="button__portfolio" style="top: 280px; position: absolute; margin-left: 80px;">
                                                            <button>
                                                                <a href="/portfolio/{{$employee->id}}">Отзывы и портфолио</a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                               
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul class="thumbnails">
                                                @foreach ($staff as $employee)
                                                @if ($employee->id >= 5)
                                                @if ($employee->id > 7)
                                                @break
                                                @endif
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{$employee['staff_picture']}}" alt="" class="staff__pic"></a>
                                                    </div>
                                                    <div class="caption">
                                                        <h4>{{$employee['first_name']}} {{$employee['second_name']}}</h4>
                                                        @foreach ($employee->jobs as $employ)
                                                        @if ($employ->job_name == 'Бровист')
                                                        @continue
                                                        @endif
                                                        <h6 name="job">{{$employ->job_name}}</h6>
                                                         @endforeach
                                                        <p>{{$employee['bio']}}</p>
                                                        <div class="button__portfolio" style="top: 290px; position: absolute; margin-left: 80px;">
                                                            <button>
                                                                <a href="/portfolio/{{$employee->id}}">Отзывы и портфолио</a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endif
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                      <div class="control-box">   
                                        <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                                        <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
                                        </div><!-- /.control-box -->
                            </div><!-- /#myCarousel -->
                        </div><!-- /.span12 -->
                    </div>
                    <!--</form>-->
                </div>
                </div>
				<div class="row-fluid" style="text-align: center;margin-top: 3%;">
					<h1><a id="location">Мы находимся <span class="colortext">здесь</span></a></h1>
				</div>
				<div class="row-fluid">
					<div id="map" style="width:100%; height:400px;">             
                        
                    </div>
				</div>	
             </div>	
    @endsection