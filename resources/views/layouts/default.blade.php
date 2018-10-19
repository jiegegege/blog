<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}" /> -->
    <title>ISMTA实验室</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="/img/zhandiantubiao.ico" type="image/x-icon">
    <script src="http://ismta.oss-cn-shenzhen.aliyuncs.com/webpjs.min.js"></script>
</head>
<style type="text/css">
    .bg{
        background: url("img/background1.jpg");
        width: 100%;
        height: 900px;
    }

    #leftDiv{
        margin-left: 150px;
        margin-top: 50px;
        width: 12%;
        height: 100%;
        float: left;
    }

    #rightDiv{
        margin-top: 50px;
        width: 50%;
        height: 100%;
        float:left;
    }

    a{
        color:#0dd3ac;
        font-size: 17px;
    }


</style>
<body>
    @include('layouts._header')

    @yield('content')
    <div class="bg">
       <div id=leftDiv>
            <ul class="nav nav-pills nav-stacked">
                <li><a onmouseover="lishi()" href="#">实验室发展历史</a></li>
                <br>
                <li><a onmouseover="huodong()" href="#">实验室活动开展</a></li>
            </ul>
       </div>
       <div id=rightDiv style="visibility: hidden;">
            @include('layouts._activity')
       </div>
    </div>


<script src="/js/app.js"></script>
<script type="/lib/led/js/vue.min.js"></script>
<script type="text/javascript">
    function huodong(){
        var rightDiv=document.getElementById('rightDiv');
        rightDiv.style.visibility='visible';
    }

    function lishi(){
        var rightDiv=document.getElementById('rightDiv');
        rightDiv.style.visibility='hidden';
    }

</script>


<script>
    $(function(){
        $('#carousel-example-generic').carousel({{ isset($currPic) ? $currPic : 0 }});
        $('video').on('contextmenu',function(){
            return false;
        });
    });
</script>
</body>
</html>
