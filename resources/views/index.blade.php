<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $website['name'] }}</title>
    <meta name="keywords" content="{{ $website['key_words'] }}"/>
    <meta name="description" content="{{ $website['meta_description'] }}"/>
    <link type="text/css" href="./css/reset.css" rel="stylesheet">
    <link type="text/css" href="./css/index.css" rel="stylesheet">
    <link type="text/css" href="./css/contact.css" rel="stylesheet">
    <link type="text/css" href="./css/swiper-3.4.2.min.css" rel="stylesheet">

</head>
<body>

<div class="all-width-w">
    <div class="phone">
        <div class="phone-l">
            <img height="50px" width="50px" src="img/phone.jpg">
            <p>电话： 13214881888</p>
        </div>
    </div>
</div>

<div class="qq">
    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=621019457&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:621019457:53" alt="业务咨询" /></a>
</div>

<div class="clear"></div>
<div class="h-50"></div>
<div class="header-wrapper">
    <div class="header-t">
        <div class="logo"><img height="150" width="150" src="/img/logo.png" /></div>
        <div class="nav">
            <ul class="nav-list">
                <li><a href="#">首页</a></li>
                <li><a href="products">施工设备</a></li>
                <li><a href="news">工程案例</a></li>
                <li><a href="about">关于我们</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="banner">

    <div class="img-wrapper" id="banner">
        <!-- Swiper -->
        <div class="swiper-container" id="banner-con">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="img-slide-ban" data-src="/img/pro/banner1.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-slide-ban" data-src="/img/pro/banner2.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-slide-ban" data-src="/img/pro/banner1.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-slide-ban" data-src="/img/pro/banner2.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-slide-ban" data-src="/img/pro/banner1.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-slide-ban" data-src="/img/pro/banner2.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-slide-ban" data-src="/img/pro/banner1.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-slide-ban" data-src="/img/pro/banner2.jpg"/>
                </div>
            </div>
            <!--<div class="swiper-pagination"></div>-->
            <!--<div class="swiper-button-prev"></div>-->
            <!--<div class="swiper-button-next"></div>-->
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="all-width h-b-120">
</div>

<div class="all-width">
    <div class="h-5"></div>
    <div class="h-5"></div>
</div>

<div class="h-20"></div>
<div class="clear"></div>
<div class="phone notice">
    <div class="phone-r ad">
        <img height="20px" width="20px" src="/img/audio.png">
        <p>13214881888</p>
    </div>

</div>
<div class="clear"></div>
<div class="main-wrapper">
    <div class="us">
        <div class="us-div us-l">
            <img class="us-img" height="300px" src="/img/pro/news1.jpg">
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
            <img class="ps-img" height="300px" src="/img/pro/news2.jpg">
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="all-width services-bg">
    <div class="services">
        <div class="h-50"></div>
        <div class="services-title">
            <p>我们的服务</p>
            <p>SERVICES</p>
        </div>
        <div class="services-body">
            <div class="services-div service-l">
                <div><img src="./img/ser01.png"></div>
                <p class="ser-title">安全</p>
                <p></p>
                <p>内蒙古地达管道工程有限公司</p>
                <p>是内蒙古专业从事非开挖技术研究和施工的专业公司。</p>
            </div>
            <div class="services-div service-c">
                <div><img src="./img/ser02.png"></div>
                <p class="ser-title">专业</p>
                <p></p>
                <p>内蒙古地达管道工程有限公司</p>
                <p>是内蒙古专业从事非开挖技术研究和施工的专业公司。</p>
            </div>
            <div class="services-div service-r">
                <div><img src="./img/ser03.png"></div>
                <p class="ser-title">高质量</p>
                <p></p>
                <p>内蒙古地达管道工程有限公司</p>
                <p>是内蒙古专业从事非开挖技术研究和施工的专业公司</p>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="h-50"></div>
</div>

<div class="all-width worker"></div>

<div class="all-width video-bg">
    <div class="h-50"></div>
    <div class="video-wrapper">
        <div class="p-video">
            {{--<embed src="https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&v=20161117&vid=j0350rvjdwh&auto=0" allowFullScreen="true" quality="high" width="800" height="500" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>--}}
            <video width="800" height="500" controls>
                <source src="/video/feikaiwa.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="all-width worker"></div>

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
            <a href="news"><p>查看更多...</p></a>
        </div>
    </div>
</div>

<div class="all-width index-news">
    <div class="news-wrapper">
        <div class="news-body">
            <ul>
                @foreach( $articles as $k => $v )
                    <a href="/new/{{ $v['id'] }}">
                        <li class="news-li">
                            <div class="news-div news-div-l news-div-l1">
                                <img width="200px" height="150px" src="./img/pro/news1.jpg">
                            </div>
                            <div class="news-div news-div-r news-div-r1">
                                <p class="new-t1">{{ $v['title'] }}</p>
                                <p class="new-t2">{{ $v['updated_at'] }}</p>
                                <p class="new-t3">{{ $v['intro'] }}</p>
                            </div>
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
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
            <a href="products"><p>查看更多...</p></a>
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
</div>

@include('footer.footer')

</body>
<script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="./js/swiper-3.4.2.jquery.min.js"></script>
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

        var $slide1 = $('#banner').find('.swiper-slide');
        var $img1 = $('#banner-con').find('.img-slide-ban');
        var pos1 = 0;
        var imgSrc1 = $img1[pos1];
        var pageSingle1 = 1;
        var imgLang11 = $img1.length - 1;
        var imgLang00 = pageSingle1 - 1;

        loadImg1($img1, imgLang00);
        function loadImg1(img, num) {
            for (var i = 0; i <= num; i++) {
                imgSrc1 = img[i];
                if (imgSrc1.hasAttribute('data-src')) {
                    loading($slide1);
                    lazyLoad1(pos1);
                } else {
                    console.log('done');
                }
            }
        }


        var swiperBanner = new Swiper('#banner-con', {
            autoplay: 3000,
            speed: 300,
            loop: true,
            pagination: '.swiper-pagination',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 40,
            freeMode: true,
            onInit: function (swiper) {
                loadImg($img1, imgLang11);
            }
        });

        //加载中...
        function loading(sli) {
            var loadingHtml = '<div class="loading">'
                + '<div class="mod-load list-loading">'
                + '<img class="icon-loading" src="img/loading.gif">'
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
        //图片延迟加载
        function lazyLoad1(pos) {
            src = $(imgSrc1).attr('data-src');
            $(imgSrc1).attr('src', src).removeAttr('data-src');
            imgLoad = document.querySelectorAll(".img-slide-ban")[pos];
            imgLoad.addEventListener("load", function (event) {
                $('.loading').remove();
            });
        }

    });

    var usl = $('.us-l');
    var usr = $('.us-r');
    var psl = $('.ps-l');
    var psr = $('.ps-r');

    var serL = $('.service-l');
    var serC = $('.service-c');
    var serR = $('.service-r');

    var newsL1 = $('.news-div-l1');
    var newsR1 = $('.news-div-r1');
    var conL = $('.contact-l');
    var conC = $('.contact-c');
    var conR = $('.contact-r');

    moveEle(conR);
    moveEle2(conC, conL);

    moveEle2(usl, usr);
    moveEle(psl);
    setTimeout("moveEle(psr)", 600);
    moveEle3(serL, serC, serR);
    moveEle2(newsL1, newsR1);

    function moveEle(ele) {
        if ($(window).scrollTop() + $(window).height() >= ele.offset().top) {
            ele.animate({left: '0px',opacity:'1'}, 1200, 'easeInOutBack', function () {
                console.log('11')
            });
        }
    }

    function moveEle2(ele, ele2) {
        if ($(window).scrollTop() + $(window).height() >= ele.offset().top) {
            ele.animate({left: '0px',opacity:'1'}, 800, 'easeInOutBack', function () {
                ele2.show();
                moveEle(ele2);
            });
        }
    }

    function moveEle3(ele, ele2, ele3) {
        if ($(window).scrollTop() + $(window).height() >= ele.offset().top) {
            ele.animate({left: '0px',opacity:'1'}, 800, 'easeInOutBounce', function () {
                ele2.animate({left: '0px',opacity:'1'}, 800, 'easeInOutBounce', function () {
                    ele3.animate({left: '0px',opacity:'1'}, 800, 'easeInOutBounce', function () {

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
        moveEle3(serL, serC, serR);
        setTimeout("moveEle(psr)", 600);
        moveEle2(newsL1, newsR1);
    })


</script>
</html>