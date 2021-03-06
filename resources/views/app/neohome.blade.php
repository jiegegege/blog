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
.home.blog .content-container {
    padding-top: 23px !important;
}
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
    <div class="content-container extra-padded">
        <div id="content" class="site-content site-container ">

        <div id="primary" class="content-area ">
            <main id="main" class="site-main" role="main">

                <img src="img/body1.jpg" class="img-rounded img-thumbnail">
            </main><!-- #main  -->
            <main id="main" class="site-main site-main2" role="main">
                <img src="img/body2.jpg" class="img-rounded img-thumbnail">
            </main><!-- #main -->
        </div><!-- #primary -->

        <!-- 右侧导航栏 -->
        <div id="secondary" class="widget-area" role="complementary">
            <aside id="" class="widget widget_search">
                <form role="search" method="get" class="search-form" action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </aside>


            <aside id="" class="widget">
                <a href="{{route('introduction',['page'=>'environment','img1'=>'a1.jpg','img2'=>'a8.jpg','num'=>'1'])}}"><h2 class="widget-title">>实验室自然环境</h2></a>
                <ul>
                    <li>

                    </li>
                </ul>
            </aside>

            <aside id="" class="widget">
                <a href="{{route('introduction',['page'=>'study','img1'=>'a7.jpg','img2'=>'a6.jpg','num'=>'2'])}}"><h2 class="widget-title">>学习资源</h2></a>
                <ul id="">
                    <li class="">
                    <a href=""></a>
                    </li>
                </ul>
            </aside>

            <aside id="" class="widget">
                <a href="{{route('introduction',['page'=>'led','img1'=>'a2.jpg','img2'=>'a4.jpg','num'=>'3'])}}"><h2 class="widget-title">>成果展示</h2></a>
                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </aside>

            <aside id="" class="widget">
                <a href="{{route('introduction',['page'=>'future','img1'=>'f1.jpg','img2'=>'f2.jpg','num'=>'4'])}}"><h2 class="widget-title">>未来规划</h2></a>
                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </aside>

        </div><!-- #secondary -->

        </div><!-- #content -->
    </div>
   @include('layouts._footer')
   <script src="./lib/wordpress/jquery.js"></script>


    <script type="text/javascript" src="./lib/wordpress/navigation.js"></script>
    <script type="text/javascript" src="./lib/wordpress/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="./lib/wordpress/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="./lib/wordpress/jquery.color.min.js"></script>
    <script type="text/javascript" src="./lib/wordpress/jquery.fittext.min.js"></script>
    <script type="text/javascript" src="./lib/wordpress/jquery.fitbutton.min.js"></script>

</body>
</html>
