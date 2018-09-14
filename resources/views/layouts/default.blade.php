<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>小学帮</title>
    <link rel="stylesheet" href="/css/app.css">
   {{--  引入站点图标 --}}
    <link rel="shortcut icon" href="/img/zhandiantubiao.ico" type="image/x-icon">
</head>
<body>
    @include('layouts._header')
    @include('layouts._message')
    @yield('content')
{{--     @include('layouts.footer')
 --}}    <script src="/js/app.js"></script>
</body>
</html>

{{-- <script>
    let toggle = $('#toggle');
    alert('Hello!');
</script> --}}
