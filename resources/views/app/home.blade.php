@extends('layouts.default')
@section('content')




<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>

    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>

    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
    <li data-target="#carousel-example-generic" data-slide-to="10"></li>

  </ol>

  <!-- picture 1----------------------------------->
  <div class="carousel-inner" role="listbox" id="picture_list">
    <div class="item active">
      <a href="{{ route('picture','1') }}"><img src="img/a1.jpg" alt="..."></a>
      <div class="carousel-caption">
        高清投影会议室
      </div>
    </div>
     <!-- picture 2----------------------------------->
    <div class="item">
      <a href="{{ route('picture', '2') }}"><img src="img/a2.jpg" alt="..."></a>
      <div class="carousel-caption">
        酷炫DIY配置研究深度学习
      </div>
    </div>
     <!-- picture 3----------------------------------->
    <div class="item">
      <a href="{{ route('picture', '3') }}"><img src="img/a3.jpg" alt="..."></a>
      <div class="carousel-caption">
       水质监测与智能鱼缸
      </div>
    </div>
     <!-- picture 4----------------------------------->
    <div class="item">
      <a href="{{ route('picture', '4') }}"><img src="img/a4.jpg" alt="..."></a>
      <div class="carousel-caption">
        多屏协同LED显示
      </div>
    </div>
     <!-- picture 5----------------------------------->
     <div class="item">
      <a href="{{ route('picture', '5') }}"><img src="img/a5.jpg" alt="..."></a>
      <div class="carousel-caption">
        台式机硬件资源丰富
      </div>
    </div>

      <!-- picture 6----------------------------------->
      <div class="item">
      <a href="{{ route('picture', '6') }}"><img src="img/a6.jpg" alt="..."></a>
      <div class="carousel-caption">
        嵌入式硬件资源丰富
      </div>
    </div>
       <!-- picture 7----------------------------------->
       <div class="item">
      <a href="{{ route('picture', '7') }}"><img src="img/a7.jpg" alt="..."></a>
      <div class="carousel-caption">
        参考书籍资料丰富
      </div>
    </div>
        <!-- picture 8----------------------------------->
    <div class="item">
      <a href="{{ route('picture', '8') }}"><img src="img/a8.jpg" alt="..."></a>
      <div class="carousel-caption">
        良好的学习环境
      </div>
    </div>
         <!-- picture 9----------------------------------->
    <div class="item">
      <a href="{{ route('picture', '9') }}"><img src="img/a9.jpg" alt="..."></a>
      <div class="carousel-caption">
        智能车机械电子计算机设计
      </div>
    </div>
          <!-- picture 10----------------------------------->
    <div class="item">
      <a href="{{ route('picture', '10') }}"><img src="img/a10.jpg" alt="..."></a>
      <div class="carousel-caption">
        3D打印DLP学习
      </div>
    </div>
           <!-- picture 11----------------------------------->
           <div class="item">
      <a href="{{ route('picture', '11') }}"><img src="img/a11.jpg" alt="..."></a>
      <div class="carousel-caption">
        Laravel 人机交互系统编程
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

{{-- <script>console.log({{session()->get('request')}});</script> --}}

@stop
