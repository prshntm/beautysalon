<link rel="stylesheet" href="bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="app.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='bootstrap-transition.js'></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('.carousel').carousel({
          interval: 6000
        )
      });
    </script>
<div class="row-fluid" style="margin: 40px auto 10px;
    padding: 20px 40px 0;
    max-width: 960px;">
    <div class="span12">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                        <ul class="thumbnails">
                            @foreach ($staff as $employee)
                            @if ($employee['staff_id'] == 5)
                            @break
                            @endif
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="{{$employee['staff_picture']}}" alt="" class="staff__pic"></a>
                                </div>
                                <div class="caption">
                                    <h4>{{$employee['first_name']}} {{$employee['second_name']}}</h4>
                                    <p>{{$employee['bio']}}</p>
                                    <div class="button__portfolio">
                                        <button type="submit">Отзывы и портфолио</button>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="item">
                        <ul class="thumbnails">
                            @foreach ($staff as $employee)
                            @if ($employee['staff_id'] >= 5)
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="{{$employee['staff_picture']}}" alt="" class="staff__pic"></a>
                                </div>
                                <div class="caption">
                                    <h4>{{$employee['first_name']}} {{$employee['second_name']}}</h4>
                                    <p>{{$employee['bio']}}</p>
                                    <div class="button__portfolio">
                                        <button type="submit">Отзывы и портфолио</button>
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
</div>
