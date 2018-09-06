<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
   {{--  引入站点图标 --}}
    <link rel="shortcut icon" href="/5b8f9636d8736.64px.ico" type="image/x-icon">
</head>
<body>
    @include('layouts._header')
    @include('layouts._message')
    @yield('content')
    <script src="/js/app.js"></script>
</body>
</html>
