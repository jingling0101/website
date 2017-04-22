<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $article['title'] }}</title>
    <meta name="keywords" content="{{ $article['key_words'] }}"/>
    <meta name="description" content="{{ $article['meta_description'] }}"/>
    <link type="text/css" href="/css/reset.css" rel="stylesheet">
    <link type="text/css" href="/css/index.css" rel="stylesheet">
    <link type="text/css" href="/css/about.css" rel="stylesheet">
    <link type="text/css" href="/css/swiper-3.4.2.min.css" rel="stylesheet">
</head>
<body>
<div class="qq">
    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=621019457&site=qq&menu=yes"><img border="0"
                                                                                              src="http://wpa.qq.com/pa?p=2:621019457:53"
                                                                                              alt="业务咨询"/></a>
</div>

<div class="header-wrapper">
    <div class="header-t">
        <div class="logo"><img height="150" width="150" src="/img/logo.png" /></div>
        <div class="nav">
            <ul class="nav-list">
                <li><a href="/index">首页</a></li>
                <li><a href="/products">施工设备</a></li>
                <li><a href="/news">工程案例</a></li>
                <li><a href="/about">关于我们</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="pic">
    <img width="100%" height="100%" src="/img/pro/banner1.jpg"/>
</div>


<div class="all-width h-b-120 tel">
    <div></div>
</div>

<div class="all-width news-bg">
    <div class="h-20"></div>
    <div class="news-title">
        <div class="news-title-l">
            <p>行业新闻/NEWS</p>
        </div>
        <div class="news-title-r">
            <p>查看更多...</p>
        </div>
    </div>
</div>

<div class="single-new">
    <div class="single-new-title">
        <h1> {{ $article['title'] }}</h1>
        <p class="title-date"> {{ $article['created_at'] }}</p>
    </div>
    <div class="single-new-content">
        {!! $article['content_html'] !!}
    </div>
</div>
<div class="clear"></div>

<div class="all-width news-bg">
    <div class="h-20"></div>
    <div class="news-title">
        <div class="news-title-l">
            <p>施工设备/EQUIPMENT</p>
        </div>
        <div class="news-title-r">
            <p>查看更多...</p>
        </div>
    </div>
    <div class="h-20"></div>
</div>

<div class="all-width sli-product">
    <div class="img-wrapper" id="pro">
        <!-- Swiper -->
        <div class="swiper-container" id="pro-con">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei1.jpg"/></div>
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei2.jpg"/></div>
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei3.jpg"/></div>
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei4.jpg"/></div>
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei5.jpg"/></div>
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei6.jpg"/></div>
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei7.jpg"/></div>
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei1.jpg"/></div>
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei2.jpg"/></div>
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei3.jpg"/></div>
                <div class="swiper-slide"><img class="img-slide"
                                               data-src="/img/pro/sebei4.jpg"/></div>
                <!-- Add Pagination -->
                <!--<div class="swiper-pagination"></div>-->
                <!-- Add Navigation -->
                <!--<div class="swiper-button-prev"></div>-->
                <!--<div class="swiper-button-next"></div>-->
            </div>
        </div>

        <div class="clear"></div>

    </div>
    <div class="h-20"></div>

    <div class="all-width h-b-120"></div>

    <div class="clear"></div>

    <div class="all-width">

        <div class="contact-wrapper">
            <div class="contact">
                <div class="contact-div contact-l">
                    <p>微信</p>
                    <br>
                    <img width="150px" height="150px" src="/img/wx.png"/>
                </div>
                <div class="contact-div contact-c">
                    <p>非开挖：13214881888</p>
                    <p>非开挖：15048841666</p>
                    <p>挖机施工：13514883737</p>
                </div>
                <div class="contact-div contact-r">
                    <p>联系地址：内蒙古省彦淖尔市临河区金川大首庆丰街西口</p>
                    <p>联系电话：0478-7955959</p>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div class="foot-wrapper">
        <div class="copyright">
            ©2017 内蒙古地达管道工程有限公司 版权所有
        </div>
    </div>

</div>
</body>
<script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="/js/swiper-3.4.2.jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var $slide = $('#pro').find('.swiper-slide');
        var $img = $('#pro').find('.img-slide');
        var pos = 0;
        var imgSrc = $img[pos];
        var pageSingle = 4;
        var imgLang1 = $img.length - 1;
        var imgLang0 = pageSingle - 1;
        console.log(imgLang0);
        console.log(imgLang1);

        loadImg($img, imgLang0);

        function loadImg(img, num) {
            for (var i = 0; i <= num; i++) {
                imgSrc = img[i];
                if (imgSrc.hasAttribute('data-src')) {
                    loading($slide);
                    lazyLoad(pos);
                } else {
                    console.log('done');
                }
            }
        }

        var swiper = new Swiper('#pro-con', {
            autoplay: 3000,
            speed: 500,
            loop: true,
            pagination: '.swiper-pagination',
            slidesPerView: pageSingle,
            paginationClickable: true,
            spaceBetween: 40,
            freeMode: true,
            onInit: function (swiper) {
                loadImg($img, imgLang1);
            }
        });


        //加载中...
        function loading(sli) {
            var loadingHtml = '<div class="loading">'
                + '<div class="mod-load list-loading">'
                + '<img class="icon-loading" src="/img/loading.gif">'
                + '加载中...'
                + '</div></div>';
            $(loadingHtml).appendTo(sli);
        }

        //图片延迟加载
        function lazyLoad(pos) {
            src = $(imgSrc).attr('data-src');
            $(imgSrc).attr('src', src).removeAttr('data-src');
            imgLoad = document.querySelectorAll(".img-slide")[pos];
            imgLoad.addEventListener("load", function (event) {
                $('.loading').remove();
            });
        }
    });

    var conL = $('.contact-l');
    var conC = $('.contact-c');
    var conR = $('.contact-r');
    moveEle(conR);
    moveEle2(conC, conL);
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

    $(window).scroll(function () {
        moveEle(conR);
        moveEle2(conC, conL);
    })


</script>
</html>