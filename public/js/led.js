//生成点状文字
    var prefont="Arial",backfont="Arial",leftfont="Arial",rightfont="Arial";
    var prestyle=backstyle=leftstyle=rightstyle="bold";
    var cont1Hight=92.2;
    var time = 20;
    var interval=0,interval1=0,interval2=0,interval3=0;//定时器的返回值

    function toleft(){
        clearInterval(interval2);
        interval2 = setInterval('animation_left()', 10);
    }

    function toright(){
        clearInterval(interval3);
        interval3 = setInterval('animation_right()', 10);

    }

    var left_deg=0,right_deg=0;
    function animation_left(){
        var rightDiv=document.getElementById("rightdiv");
        var rotate=rightDiv.style.transform.toString().split(" ");
        // alert(rotate[0]);
        // alert(rotate[1]);
        // alert(rotate[2]);
        var rX=rotate[0].substring(rotate[0].indexOf('(')+1,rotate[0].indexOf('d'));
        var rY=rotate[1].substring(rotate[1].indexOf('(')+1,rotate[1].indexOf('d'));
        var rZ=rotate[2].substring(rotate[2].indexOf('(')+1,rotate[2].indexOf('d'));
        // alert(rX);
        // alert(rY);
        // alert(rZ);
        var y=(parseFloat(rY)-1)%360;
        left_deg++;
        rightDiv.style.transform="rotateX(-15deg) rotateY("+y+"deg) rotateZ(0deg)";
        if(left_deg==90){
            left_deg=0;
            clearInterval(interval2);
        }
    }

    function animation_right(){
        var rightDiv=document.getElementById("rightdiv")
        var rotate=rightDiv.style.transform.toString().split(" ");
        // alert(rotate[0]);
        // alert(rotate[1]);
        // alert(rotate[2]);
        var rX=rotate[0].substring(rotate[0].indexOf('(')+1,rotate[0].indexOf('d'));
        var rY=rotate[1].substring(rotate[1].indexOf('(')+1,rotate[1].indexOf('d'));
        var rZ=rotate[2].substring(rotate[2].indexOf('(')+1,rotate[2].indexOf('d'));
        // alert(rX);
        // alert(rY);
        // alert(rZ);
        var y=(parseFloat(rY)+1)%360;
        right_deg++;
        rightDiv.style.transform="rotateX(-15deg) rotateY("+y+"deg) rotateZ(0deg)";
        if(right_deg==90){
            right_deg=0;
            clearInterval(interval3);
        }
    }

    //设置字体
    function setAllFont(preFont,leftFont,rightFont,backFont){
        prefont=preFont;
        leftfont=leftFont;
        rightfont=rightFont;
        backfont=backFont;

    }

    //设置字体是否加粗
    function setAllStyle(preStyle,leftStyle,rightStyle,backStyle){
        if(preStyle=="加粗"){
            prestyle="bold";
        }

        if(leftStyle=="加粗"){
            leftstyle="bold";
        }

        if(rightStyle=="加粗"){
            rightstyle="bold";
        }

        if(backStyle=="加粗"){
            backstyle="bold";
        }
    }

    function xianshi(pre,left,right,back,direction,speed){//参数说明：pre：前面字  left:左面字  right:右面字  back:后面字  direction:字幕滚动方向（up或者down）  speed:滚动速度
        clearInterval(interval);
        clearInterval(interval1);

        var mleft =  document.getElementById('mleft');
        var mright =  document.getElementById('mright');
        var mpre =  document.getElementById('mpre');
        var mback =  document.getElementById('mback');

        if(direction=='up'){
            getDzText(pre, 'pre');
            getDzText(right, 'right');
            getDzText(left, 'left');
            getDzText(back, 'back');


            interval = setInterval('myScroll('+speed+')', time);

            mleft.scrollTop = 0;
            mright.scrollTop = 0;
            mpre.scrollTop = 0;
            mback.scrollTop = 0;
        }
        else{
            getFdzText(pre, 'pre');
            getFdzText(right, 'right');
            getFdzText(left, 'left');
            getFdzText(back, 'back');
            interval1 = setInterval('myScroll1('+speed+','+pre.length+','+right.length+','+left.length+','+back.length+')', time);
        }
    }

    function yulan(){//实现预览按钮点击事件
        clearInterval(interval);
        clearInterval(interval1);



        var pre=document.getElementById('preText');
        var right=document.getElementById('rightText');
        var left=document.getElementById('leftText');
        var back=document.getElementById('backText');

        var radiobox=document.getElementsByClassName('radiobox');

        var mleft =  document.getElementById('mleft');
        var mright =  document.getElementById('mright');
        var mpre =  document.getElementById('mpre');
        var mback =  document.getElementById('mback');

        var speed=document.getElementById('preRange').value;
        if(radiobox[0].checked){
            getDzText(pre.value, 'pre');
            getDzText(right.value, 'right');
            getDzText(left.value, 'left');
            getDzText(back.value, 'back');


            interval = setInterval('myScroll('+speed+')', time);

            mleft.scrollTop = 0;
            mright.scrollTop = 0;
            mpre.scrollTop = 0;
            mback.scrollTop = 0;
        }
        else{
            getFdzText(pre.value, 'pre');
            getFdzText(right.value, 'right');
            getFdzText(left.value, 'left');
            getFdzText(back.value, 'back');

            interval1 = setInterval('myScroll1('+speed+','+pre.value.length+','+right.value.length+','+left.value.length+','+back.value.length+')', time);
        }


    }

    function changeText(num){//同步改变复选框中选择的文本的值
        var textCheckbox=document.getElementsByClassName('textCheckbox');
        var idname=['preText','leftText','rightText','backText'];
        var textvalue=document.getElementById(idname[num]).value;
        if(textCheckbox[num].checked == true){
            for(var i=0;i<4;i++){
                if(textCheckbox[i].checked==true){
                    document.getElementById(idname[i]).value=textvalue;
                }
            }
        }
    }

    function rangeChange(num){//同步改变复选框中的速度的值
        var textCheckbox=document.getElementsByClassName('textCheckbox1');
        var idname=['preRange','leftRange','rightRange','backRange'];
        var rangevalue=document.getElementById(idname[num]).value;
        if(textCheckbox[num].checked == true){
            for(var i=0;i<textCheckbox.length;i++){
                if(textCheckbox[i].checked==true){
                    document.getElementById(idname[i]).value=rangevalue;
                }
            }
        }

        var spanSpeed=document.getElementsByClassName('spanSpeed');
        for(var i=0;i<spanSpeed.length;i++){
            spanSpeed[i].innerHTML = "";
            spanSpeed[i].innerHTML = document.getElementById(idname[i]).value;
        }

    }

    var numberX = numberY = 16;
    var sum=0
    function getDzText(str, surface)//str：获取字符串 surface：字符串所在的面  函数作用：从左到右获取str字符串的点状字
    {
        var imgDiv=document.getElementById(surface+'ImgDiv');
        imgDiv.innerHTML = "";
        var cont2=document.getElementById(surface+'Cont2');
        cont2.innerHTML = "";
        var len=str.length;
        var c=document.getElementById("myCanvas");
        var ctx=c.getContext("2d");

        ctx.font=eval(surface+"style")+" normal 75px "+eval(surface.toString()+"font");
        ctx.fillStyle="#cc0000";
        for (var i=0;i<len;i++){
            ctx.clearRect(0,0,c.width,c.height);
            var p = /[0-9a-z]/i;
            if(p.test(str[i])){//true,说明有英文字母或数字。
                if(str[i]>='A'&&str[i]<='Z'){
                    ctx.fillText(str[i],20,70);
                }
                else{
                    ctx.fillText(str[i],25,70);
                }
            }
            else{
                ctx.fillText(str[i],9,70);
            }

            clickCropImage(surface);

        }
        if(len==1){
            ctx.clearRect(0,0,c.width,c.height);
            ctx.fillText(" ",9,70);
            clickCropImage(surface);
        }
        sum=0;
        var cont1=document.getElementById(surface+"cont1");
        if(len==1)
            cont1.style.height=cont1Hight*(len+1)+ "px";

        else
            cont1.style.height=cont1Hight*len+ "px";
    }

    function getFdzText(str, surface){//str：获取字符串 surface：字符串所在的面  函数作用：从右到左获取str字符串的点状字
        var imgDiv=document.getElementById(surface+'ImgDiv');
        imgDiv.innerHTML = "";
        var cont2=document.getElementById(surface+'Cont2');
        cont2.innerHTML = "";
        var len=str.length;
        var c=document.getElementById("myCanvas");
        var ctx=c.getContext("2d");
        ctx.font=eval(surface+"style")+" normal 75px "+eval(surface.toString()+"font");
        ctx.fillStyle="#cc0000";
        if(len==1){
            ctx.clearRect(0,0,c.width,c.height);
            ctx.fillText(" ",9,70);
            clickCropImage(surface);
        }
        for (var i=len-1;i>=0;i--){
            ctx.clearRect(0,0,c.width,c.height);
            var p = /[0-9a-z]/i;
            if(p.test(str[i])){//true,说明有英文字母或数字。
                if(str[i]>='A'&&str[i]<='Z'){
                    ctx.fillText(str[i],20,70);
                }
                else{
                    ctx.fillText(str[i],25,70);
                }

            }
            else{
                ctx.fillText(str[i],9,70);
            }
            clickCropImage(surface);
        }

        sum=0;
        var cont1=document.getElementById(surface+"cont1");
        if(len==1)
            cont1.style.height=cont1Hight*(len+1)+ "px";
        else
            cont1.style.height=cont1Hight*len+ "px";

        var m =  document.getElementById('m'+surface);
        if(len==1){
            m.scrollTop = (len-2)*cont1Hight;
        }

        if(len>2){
            m.scrollTop = (len-2)*cont1Hight;
        }

    }

    function clickCropImage(surface) {
        var canvas = document.getElementById('myCanvas');
        //  获取画布大小，判断画布大小
        var canvasH = canvas.clientHeight;
        var canvasW = canvas.clientWidth;
        //  将图片等分
        var locationArr=new Array();
        for (var y = 0; y < numberX; y++) {
            for (var x = 0; x < numberY; x++) {
                var location = {
                    'x' : x * canvasW / numberX ,
                    'y' : y * canvasH / numberY ,
                    'Dx' : x * canvasW / numberX + canvasW / numberX,
                    'Dy' : y * canvasH / numberY + canvasH / numberY,
                    'locationOption' : (x + 1).toString() + (y + 1).toString(),
                };
                locationArr.push(location);
                cropImage(canvas, (x * canvasW / numberX), (y * canvasH / numberY), canvasW / numberX, canvasH / numberY,surface);
                sum++;
                if(sum==512){
                    var cont1 = document.getElementById(surface+'cont1')
                    var cont2 = document.getElementById(surface+'Cont2');
                    cont2.innerHTML = cont1.innerHTML;
                }
            };
        };
        canvasComimgCreated = false;
        divComimgCreated = false;
    }

    function cropImage(targetCanvas, x, y, width, height,surface) {
        var count=0;
        var targetctx = targetCanvas.getContext('2d');
        var targetctxImageData = targetctx.getImageData(x, y, width, height);
        // sx, sy, sWidth, sHeight
        var c = document.createElement('canvas');
        var ctx = c.getContext('2d');
        c.width = width;
        c.height = height;
        ctx.rect(0, 0, width, height);
        ctx.fillStyle = 'white';
        ctx.fill();
        ctx.putImageData(targetctxImageData, 0, 0);
        // imageData, dx, dy
        // 创建img 块

        var div = document.createElement('div');
        var divattr = document.createAttribute("class");
        divattr.value = "dzDiv";
        div.setAttributeNode(divattr);
        div.style.height='5px';
        div.style.width='5px';
        var imgData=ctx.getImageData(0,0,5,5);
        // var allImgData=ctx.getImageData(0,0,93,93);
        // alert(allImgData.data);
        for(var i=0;i<imgData.data.length;i++){
            if(imgData.data[i]!=0){
                count++;
                i=i+3;
            }
        }
        if(count*1.0/(imgData.data.length/4)>=1.0/2.0){
            div.style.backgroundColor='red';
        }
        else{
            div.style.backgroundColor='black';
        }


        var imgDiv=document.getElementById(surface+"ImgDiv");
        imgDiv.appendChild(div);
    }

    function setImageByFrame(imgFrame,surface,width,height){
        var canvas = document.createElement("canvas");
        canvas.width = width;
        canvas.height = height;
        var ctx = canvas.getContext("2d");
        ctx.putImageData(imgFrame,0,0,0,0,100,200);
        var sur=document.getElementById(surface);
        sur.style.backgroundImage = "url('"+canvas.toDataURL()+"')";
    }




//字体循环滚动
    var cont1 = document.getElementsByClassName('cont1');

    function myScroll(speed) {
        var mleft =  document.getElementById('mleft');
        var mright =  document.getElementById('mright');
        var mpre =  document.getElementById('mpre');
        var mback =  document.getElementById('mback');
        // alert("mpre.scrollTop="+mpre.scrollTop);
        // alert("cont1[2].scrollHeight="+cont1[2].scrollHeight);
        if( mleft.scrollTop >= cont1[0].scrollHeight-3) {
            mleft.scrollTop=0;

        }else {
            mleft.scrollTop+=speed;

        }
        if(mright.scrollTop >= cont1[1].scrollHeight-3) {
            mright.scrollTop = 0;

        }else {
            mright.scrollTop+=speed;

        }
        if(mpre.scrollTop >= cont1[2].scrollHeight-3) {
            mpre.scrollTop=0;

        }else {
            mpre.scrollTop+=speed;

        }
        if(mback.scrollTop >= cont1[3].scrollHeight-3) {
            mback.scrollTop = 0;

        }else {
            mback.scrollTop+=speed;

        }

    }
    function myScroll1(speed,pre,right,left,back) {
        var mleft =  document.getElementById('mleft');
        var mright =  document.getElementById('mright');
        var mpre =  document.getElementById('mpre');
        var mback =  document.getElementById('mback');
        if(mleft.scrollTop ==0) {
            if(left==1)
                mleft.scrollTop = cont1Hight*(left+1)
            else
                mleft.scrollTop = cont1Hight*left;
        }else {
            mleft.scrollTop-=speed;
        }
        if(mright.scrollTop ==0) {
            if(right==1)
                mright.scrollTop = cont1Hight*(right+1);
            else
                mright.scrollTop = cont1Hight*right;
        }else {
            mright.scrollTop-=speed;
        }
        if(mpre.scrollTop ==0) {
            if(pre==1)
                mpre.scrollTop = cont1Hight*(pre+1);
            else
                mpre.scrollTop = cont1Hight*pre;
        }else {
            mpre.scrollTop-=speed;
        }
        if(mback.scrollTop ==0) {
            if(back==1)
                mback.scrollTop = cont1Hight*(back+1);
            else
                mback.scrollTop = cont1Hight*back;
        }else {
            mback.scrollTop-=speed;
        }
    }

