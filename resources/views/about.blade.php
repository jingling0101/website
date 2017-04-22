<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $website['name'] }}</title>
    <meta name="keywords" content="{{ $website['key_words'] }}"/>
    <meta name="description" content="{{ $website['meta_description'] }}"/>
    <link type="text/css" href="./css/reset.css" rel="stylesheet">
    <link type="text/css" href="./css/index.css" rel="stylesheet">
    <link type="text/css" href="./css/about.css" rel="stylesheet">
    <!--<link type="text/css" href="./css/swiper-3.4.2.min.css" rel="stylesheet">-->
</head>
<body>

<div class="header-wrapper">
    <div class="header-t">
        <div class="logo"><img height="150" width="150" src="/img/logo.png" /></div>
        <div class="nav">
            <ul class="nav-list">
                <li><a href="index">首页</a></li>
                <li><a href="products">施工设备</a></li>
                <li><a href="news">工程案例</a></li>
                <li><a href="about">关于我们</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="qq">
    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=621019457&site=qq&menu=yes"><img border="0"
                                                                                              src="http://wpa.qq.com/pa?p=2:621019457:53"
                                                                                              alt="业务咨询"/></a>
</div>

<div class="pic">
    <img width="100%" height="100%" src="/img/pro/banner1.jpg"/>
</div>

<div class="all-width h-b-120 tel">
    <div></div>
</div>
<div class="clear"></div>

<div class="main-wrapper">
    <div class="us">
        <div class="us-div us-l">
            <img class="us-img" height="300px" src="../img/pro/news1.jpg">
        </div>
        <div class="us-div us-con us-r">
            <p class="us-title"><span class="p-red us-red">关于我们</span> / about</p>
            <p>
                {{ $website['about_us'] }}
            </p>
        </div>
    </div>

    <div class="us">
        <div class="us-div us-con ps-r">
            <p class="us-title"><span class="p-red us-red">承接</span> / service</p>
            <p>
                {{ $website['about_ser'] }}
            </p>
        </div>

        <div class="us-div ps-l">
            <img class="ps-img" height="300px" src="../img/pro/news2.jpg">
        </div>
    </div>
    <div class="clear"></div>
</div>

@include('footer.footer')

</body>
<script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script>

    var usl = $('.us-l');
    var usr = $('.us-r');
    var psl = $('.ps-l');
    var psr = $('.ps-r');
    var conL = $('.contact-l');
    var conC = $('.contact-c');
    var conR = $('.contact-r');


    moveEle(conR);
    moveEle2(conC, conL);

    moveEle2(usl, usr);
    moveEle(psl);
    setTimeout("moveEle(psr)", 600);


    function moveEle(ele) {
        if ($(window).scrollTop() + $(window).height() >= ele.offset().top) {
            ele.animate({left: '0px', opacity: '1'}, 1200, 'easeInOutBack', function () {
                console.log('11')
            });
        }
    }

    function moveEle2(ele, ele2) {
        if ($(window).scrollTop() + $(window).height() >= ele.offset().top) {
            ele.animate({left: '0px', opacity: '1'}, 800, 'easeInOutBack', function () {
                ele2.show();
                moveEle(ele2);
            });
        }
    }

    function moveEle3(ele, ele2, ele3) {
        if ($(window).scrollTop() + $(window).height() >= ele.offset().top) {
            ele.animate({left: '0px', opacity: '1'}, 800, 'easeInOutBounce', function () {
                ele2.animate({left: '0px', opacity: '1'}, 800, 'easeInOutBounce', function () {
                    ele3.animate({left: '0px', opacity: '1'}, 800, 'easeInOutBounce', function () {

                    });
                });
            });
        }
    }

    $(window).scroll(function () {
        moveEle2(usl, usr);
        moveEle(psl);
        moveEle(conR);
        moveEle2(conC, conL);
        setTimeout("moveEle(psr)", 600);

    })
</script>
</html>