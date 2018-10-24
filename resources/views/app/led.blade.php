<style type="text/css">
        [v-clock] {
            display: none
        }

        .box {
            height: 400px;
            width: 400px;
            margin: 10px auto;
            position: relative;
            transform: rotateX(0deg) rotateY(0deg);
            transform-style: preserve-3d;
            cursor: move;
        }

        .m1 {
            position: absolute;
            left: 0;
            right: 0;
            background-size: cover;
            background-position: center;
        }

        .a1 ul {
            list-style: none;
            width: 100%;
            margin: 0;
            padding:0 0px;
        }

        .a1 ul li {
            font-size: 60px;
            width: 100%;
            margin: auto;
            color: red
        }
        .a1{
            margin: auto;
        }
        .point{
            width: 10px;
            height: 10px;
            background-color: red;
            clear: both;
        }
        .imgDiv img{
            margin-left: 1.1Px;
            margin-top: 1.17px;
            float:left;
            border-radius:20px;
        }
        .imgDiv{
            float: left;
            width: 100%;
            display:flow-root;
            position: static;
        }

        .dzDiv{
            margin-left: 1.1Px;
            margin-top: 1.17px;
            float:left;
            border-radius:20px;
        }

        #top{
            background-image: url(img/bg1.jpg);
            transform: rotateX(90deg) translateZ(50px);
            width: 100px;
            height: 100px;
        }

        #bottom{
            background-image: url(img/bg1.jpg);
            transform: rotateX(-90deg) translateZ(150px);
            width: 100px;
            height: 100px;
        }

        #pre{
            background-image: url(img/bg1.jpg);
            transform:rotateX(0deg) rotateY(0deg) translateZ(50px);
            width: 100px;
            height: 200px;
        }

        #left{
            background-image: url(img/bg1.jpg);
            transform:rotateX(0deg) rotateY(-90deg) translateZ(50px);
            width: 100px;
            height: 200px;
        }

        #right{
            background-image: url(img/bg1.jpg);
            transform:rotateX(0deg) rotateY(90deg) translateZ(50px);
            width: 100px;
            height: 200px;
        }

        #back{
            background-image: url(img/bg1.jpg);
            transform:rotateX(0deg) rotateY(180deg) translateZ(50px);
            width: 100px;
            height: 200px;
        }

        #leftdiv{
            width: 350px;
            height: auto;
            float: left;
            margin: auto;
        }

        #rightdiv{
            width: 300px;
            margin-left: 100px;
            margin-top: 50px;
            float: left;
        }

        #led_body{
            background-color:#fff;
            padding: 10px;
            width: 45%;
            margin: auto;

        }
    </style>
    <h2 align="center">LED模拟效果</h2>
    <div id="primary" class="content-area ">
        <div id="leftdiv" style="margin-left: 200px;">
                    <form class="bs-example bs-example-form" role="form" style="margin: auto;width:100%">
                        <div style="width: 300px;margin: auto;">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" class="textCheckbox">
                                </span>
                                <span class="input-group-addon" >正面字</span>
                                <input type="text" class="form-control" id="preText" name="pre" onchange="changeText(0)">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" class="textCheckbox">
                                </span>
                                <span class="input-group-addon" >左面字</span>
                                <input type="text" class="form-control" id="leftText" name="left" onchange="changeText(1)">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" class="textCheckbox">
                                </span>
                                <span class="input-group-addon" >右面字</span>
                                <input type="text" class="form-control" id="rightText" name="right"  onchange="changeText(2)">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" class="textCheckbox">
                                </span>
                                <span class="input-group-addon" >后面字</span>
                                <input type="text" class="form-control" id="backText" name="back" onchange="changeText(3)">
                            </div>
                        </div>
                        <div style="width: 300px;margin:5px auto; ">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" class="textCheckbox1" checked="true">
                                </span>
                                <span class="input-group-addon" >正面速度</span>
                                <input id="preRange" min="0" max="10" type="range" name="points" onchange="rangeChange(0)" />
                                <span class="input-group-addon  spanSpeed" >5</span>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" class="textCheckbox1" checked="true">
                                </span>
                                <span class="input-group-addon" >左面速度</span>
                            <input id="leftRange" min="0" max="10" type="range" name="points" onchange="rangeChange(1)"/>
                            <span class="input-group-addon spanSpeed" >5</span>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" class="textCheckbox1" checked="true">
                                </span>
                                <span class="input-group-addon" >右面速度</span>
                                <input id="rightRange" min="0" max="10" type="range" name="points" onchange="rangeChange(2)"/>
                                <span class="input-group-addon spanSpeed" >5</span>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" class="textCheckbox1" checked="true">
                                </span>
                                <span class="input-group-addon" >后面速度</span>
                                <input id="backRange" min="0" max="10" type="range" name="points" onchange="rangeChange(3)"/>
                                <span class="input-group-addon spanSpeed" >5</span>
                            </div>
                        </div>
                        <div style="width: 300px;margin: auto;">
                            <div class="input-group">
                                <span class="input-group-addon">文字滚动方向</span>
                                <span class="input-group-addon">上</span>
                                <span class="input-group-addon">
                                    <input type="radio" class="radiobox" name="direction" checked="true">
                                </span>
                                <span class="input-group-addon">下</span>
                                <span class="input-group-addon">
                                    <input type="radio" class="radiobox" name="direction">
                                </span>
                            </div>
                        </div>
                        <div class="modal-footer" style="width: 300px;margin: auto;">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onmousedown="yulan()">预览</button>
                            <button type="button" class="btn btn-primary">确认修改</button>
                        </div>
                    </form>
                </div>
    </div>
    <div id="secondary" class="widget-area" role="complementary">
         <div style="width:100%;height: 100%">
                    <div style="float:left;margin-top: 135px;">
                        <a onclick="toleft()" style="font-size:30px">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                    </div>

                    <span id="app" v-cloak>
                        <div id="rightdiv" class="box" style="width:100px;height:200px">

                            <div id="top" :style="styleTop" class="m1"></div>
                            <div id="bottom" :style="styleBottom" class="m1"></div>
                            <div id="left" :style="styleLeft" class="m1">
                                <div id="mleft" style="width: 100%;height: 100%;overflow: hidden; margin: 0" class="a1">
                                    <ul class="cont1" id="leftcont1">
                                        <div id="leftImgDiv" class="imgDiv"></div>
                                    </ul>
                                    <ul class="cont2" id="leftCont2"></ul>
                                </div>
                            </div>
                            <div id="right" :style="styleRight" class="m1">
                                <div id="mright" style="width: 100%;height: 100%;overflow: hidden; margin: 0" class="a1">
                                    <ul class="cont1" id="rightcont1">
                                        <div id="rightImgDiv" class="imgDiv"></div>
                                    </ul>
                                    <ul class="cont2" id="rightCont2"></ul>
                                </div>
                            </div>
                            <div id="pre" :style="stylePre" class="m1">
                                <div id="mpre" style="width: 100%;height: 100%;overflow: hidden; margin: 0" class="a1">
                                    <ul class="cont1" id="precont1">
                                        <div id="preImgDiv" class="imgDiv"></div>
                                    </ul>
                                    <ul class="cont2" id="preCont2"></ul>
                                </div>
                            </div>
                            <div id="back" :style="styleBack" class="m1">
                                <div id="mback" style="width: 100%;height: 100%;overflow: hidden;margin: 0" class="a1">
                                    <ul class="cont1" id="backcont1">
                                        <div id="backImgDiv" class="imgDiv"></div>
                                    </ul>
                                    <ul class="cont2" id="backCont2"></ul>
                                </div>
                            </div>
                        </div>
                    </span>
                    <div  style="float:left;margin-top: 135px;margin-left: 90px">
                        <a  onclick="toright()" style="font-size:30px">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
                <canvas id="myCanvas" width="93px" height="93px" style="visibility: hidden;">
                    您的浏览器不支持 HTML5 canvas 标签。</canvas>
    </div>
<script type="text/javascript" src="js/led.js"></script>
<script src="js/jquery-touchrotate.js"></script>
<script type="text/javascript">
    $('.box').touchrotate({
        //初始3D旋转
        rotateX: -15,
        rotateY: 15,
        //数值越小 , 旋转速度越快
        speedX: 2,
        speedY: 2,
        // 旋转的倍数, 越大旋转的圈数越多
        multipleX: 50,
        multipleY: 50,
        // 动画持续的时间, 单位是S
        time: 2,
        //模式 0:表示匀速运动 , 运动中途可以重新开始 , 1表示先加速后减速(动画过程中不可滑动,体验效果差)
        model: 0
    });
</script>
