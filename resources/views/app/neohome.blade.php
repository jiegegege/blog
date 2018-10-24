<!DOCTYPE html>

<html lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/app.css">
<script src="/js/app.js"></script>

<title>ISMTA 实验室</title>

<style type="text/css">
img.wp-smiley,
img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}
</style>

<link rel="stylesheet" id="citylogic-site-title-font-default-css" href="./lib/wordpress/css" type="text/css" media="all">
<link rel="stylesheet" id="citylogic-body-font-default-css" href="./lib/wordpress/css(1)" type="text/css" media="all">
<link rel="stylesheet" id="citylogic-blockquote-quote-font-css" href="./lib/wordpress/css(2)" type="text/css" media="all">
<link rel="stylesheet" id="citylogic-heading-font-default-css" href="./lib/wordpress/css(3)" type="text/css" media="all">
<link rel="stylesheet" id="citylogic_customizer_theme_fonts-css" href="./lib/wordpress/css(4)" type="text/css" media="screen">
<link rel="stylesheet" id="citylogic-header-left-aligned-css" href="./lib/wordpress/header-left-aligned.css" type="text/css" media="all">
<link rel="stylesheet" id="otb-font-awesome-css" href="./lib/wordpress/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet" id="citylogic-style-css" href="./lib/wordpress/style.css" type="text/css" media="all">

<style type="text/css">
.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
</style>

<!-- Begin Custom CSS -->
<style type="text/css" id="out-the-box-custom-css">
body,.content-container,.masonry-grid-container article.blog-post-masonry-grid-layout,.site-content .rpwe-block li{background-color:#FFFFFF;}
</style>
<!-- End Custom CSS -->
<style type="text/css">
.glyphicon-education{

    font-size:28px;
    color:#0dd3ac;
    position: relative;
    left: -15px;
}
.mytitle{
    /*font-family: ;*/
    position: relative;
    left: 6px;
    font-size:25px;
    color:#0dd3ac;
}
.glyphicon-education:hover{
    text-decoration: none;
    color:#bb890a;
}
.widget-area{
    margin:0px 0 3.2em 0;
}
.site-main2{
    margin-top: 6px;
}
div.info-text strong{
    color: #0dd3ac;
}
#primary {
    padding: 0 11.3% 0 0;
}
#content {
    max-width: 1380px;
}
</style>
</head>

<body class="home blog comfortable-paragraph-line-height citylogic-page-builders-use-theme-styles citylogic-shop-no-breadcrumbs">
    <header id="masthead" class="site-header left-aligned has-header-media transparent" role="banner">

    <div class="site-logo-area border-bottom">
        <div class="site-container">

            <div class="branding">
                    <a href="" class="brand-bar glyphicon glyphicon-education" marked="1" ></a>
                    <span class="mytitle">ISMTA实验室</span>
            </div>



            <div class="site-header-right ">

                <div class="top info-text">
                    <div class="info-text">
                        <strong>联系我们: ismta@acenum.cn</strong>
                    </div>
                </div>

            </div>

        </div>
        <div class="clearboth"></div>
    </div>

    </header><!-- #masthead -->

<!-- <script>
    var cityLogicSliderTransitionSpeed = parseInt(450);
</script> -->

    <!-- 背景大图 -->
    <div class="header-image-padder">
        <div class="header-image" style="height: auto;">

            <img src="/img/banner.jpg" alt="" width="1500" height="744">

            <div class="opacity"></div>
        </div>
    </div>

    <!-- 主体 -->
    <div class="content-container extra-padded">
        @include('layouts._navbar')
        <div id="content" class="site-content site-container ">
            @include('app.introduction')
        </div><!-- #content -->
    </div><!-- .content-container -->

    <!-- 底部 -->
   @include('layouts._footer')
   <!-- #colophon -->
   <script src="./lib/wordpress/jquery.js"></script>
   <script type="text/javascript">
        $(function () {
        $('#a1').click(function () {
                $('#content').load("{{route('introduction')}}");//注意连接不能跨域，并且要删除链接中的html,body,head这种标签
                return false; //禁止跳转
            });
        $('#a2').click(function () {
                $('#content').load("{{route('environment')}}");//注意连接不能跨域，并且要删除链接中的html,body,head这种标签
                return false; //禁止跳转
            });
        $('#a3').click(function () {
                $('#content').load("{{route('study')}}");//注意连接不能跨域，并且要删除链接中的html,body,head这种标签
                return false; //禁止跳转
            });
        $('#a4').click(function () {
                $('#content').load("{{ route('led') }}");//注意连接不能跨域，并且要删除链接中的html,body,head这种标签
                return false; //禁止跳转
            });
        $('#a5').click(function () {
                $('#content').load("http://blog.test/activity");//注意连接不能跨域，并且要删除链接中的html,body,head这种标签
                return false; //禁止跳转
            });
        });
    </script>

    <script type="text/javascript" src="./lib/wordpress/navigation.js"></script>
    <script type="text/javascript" src="./lib/wordpress/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="./lib/wordpress/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="./lib/wordpress/jquery.color.min.js"></script>
    <script type="text/javascript" src="./lib/wordpress/jquery.fittext.min.js"></script>
    <script type="text/javascript" src="./lib/wordpress/jquery.fitbutton.min.js"></script>

</body>
</html>
