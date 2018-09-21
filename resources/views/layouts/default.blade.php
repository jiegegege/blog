<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ISMTA实验室</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="/img/zhandiantubiao.ico" type="image/x-icon">
</head>
<body>
    @include('layouts._header')
    @yield('content')


<script src="/js/app.js"></script>

<!-- <script src="http://a.tbcdn.cn/kissy/1.0.0/build/imglazyload/imglazyload-min.js" type="text/javascript"></script>
<script src="http://kissy.googlecode.com/svn/trunk/third-party/yui2/yahoo-dom-event/yahoo-dom-event.js" type="text/javascript"></script>
<script type="text/javascript">

KISSY.ImageLazyload({

mod: "manual", // 延迟模式。默认为 auto

diff: 200 // 当前屏幕下多远处的图片开始延迟加载。默认两屏外的图片才延迟加载

});
</script> -->

<script>
function lazyContainer(searchNode) {
    $(searchNode).find('.active').find('img.lazy').each(function() {
       var imgSrc = $(this).attr('data-src');
       if (imgSrc) {
           $(this).attr('src',imgSrc);
           $(this).attr('data-src','');
       }
    });
    }

    $('#carousel-example-generic').bind('slid.bs.carousel', function() {
    lazyContainer(this);
    });

    lazyContainer('#carousel-example-generic');
</script>

<script>
    $(function(){
        $('#carousel-example-generic').carousel({{ isset($currPic) ? $currPic : 0 }});
    });
</script>
</body>
</html>
