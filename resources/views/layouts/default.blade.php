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
<script>
    $(function(){
        $('#carousel-example-generic').carousel({{ isset($currPic) ? $currPic : 0 }});
    });
</script>
</body>
</html>
