<html>
<head>
    <title>抽签</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="/js/lottery.min.css" />
    <style>
        body {
            padding: 0;
            margin: 0;
        }
        .lotterybox{
            height: 100%;
        }
        .dh-lottery .actions {
            position: initial;
            right: 20px;
            bottom: 20px;
            display: flex;
            float: right;
        }
    </style>
</head>

<body>
    <div class="lotterybox"></div>

    <!-- Zepto or jQuery -->
    <script src="https://cdn.bootcss.com/zepto/1.2.0/zepto.min.js"></script>


    <script src="/js/lottery.compact.min.js"></script>

    <!-- ROCK ON -->
    <script>
            $.lottery({
                el: '.lotterybox',
                api: '/mytest.json',
                once: true,
                subtitle: "class",
                // desc: "title",
                timeout: 6,
                number: 1,
                speed: 100,
            });
    </script>

</body>

</html>
