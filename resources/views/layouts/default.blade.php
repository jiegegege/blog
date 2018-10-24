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

<body>
    @include('layouts._header')

    @yield('content')

<script src="/js/app.js"></script>
</body>
</html>
