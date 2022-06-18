<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{{asset('public/layout/frontend')}}/">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="canonical" href="/"/>

        <meta name='revisit-after' content='1 days'/>

        <meta name="robots" content="index,follow"/>

        <title>Bất động sản kỳ anh</title>

        <meta name="keywords" content="Bất động sản kỳ anh"/>
        
        <link rel="shortcut icon" href="/public/site/img/favicon.ico">
        <!--Meta share facebook-->
        <meta property="og:url" content="/"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Bất động sản kỳ anh"/>
      
              <meta property="og:image" content="/public/site/img/bannerfacebook.jpg"/>
        <meta property="og:site_name" content="Bất động sản kỳ anh">
        <link rel="stylesheet" href="public/site/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/site/css/layout.css?v2">
        <link rel="stylesheet" href="public/site/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="public/site/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/site/css/owl.carousel.min.css">
        <link rel="stylesheet" href="public/site/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="public/site/css/animate.css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="public/site/css/xzoom.css" media="all" />
        <link rel="stylesheet" type="text/css" href="public/site/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="public/site/css/swiper.min.css">

    <div id="fb-root"></div>
</head>
<body>
    <script src="public/site/js/jquery-3.3.1.min.js"></script>
    <script src="public/site/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="public/site/js/bootstrap.min.js"></script>
    <script  type="text/javascript" src="public/site/js/wow.min.js"></script>
    <script type="text/javascript" src="public/site/js/xzoom.min.js"></script>
    <script src="public/site/js/jquery.fancybox.min.js"></script>
    <script src="public/site/js/swiper.min.js"></script>

  
    <header>
       <section class="header-top">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="visible-xs">Hotline: 0799.098.098</div>
                </div>
              
                    </div>
                </div>
           
    </section>

 <!------------------------------------------------------ THANH MENU --------------------------------------------->

    <section class="menu wow" id="myMenu">
        <div class="container">
            <div class="row main-menu">
                <div class="col-lg-12">
                    <div class="">
                        <a class="toggleMenu" href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        <ul class="nav">
                            <li class="nav-item"> <a href="http://localhost/laravel-5.3/">Trang chủ</a>  </li>

                             <li class="nav-item "><a href="#">Dự án<i class="fa fa-caret-down" aria-hidden="true"></i> </a>
                                            <ul>
                                               <!-- <li><a href="/danh-muc/du-an.html">Biệt thự</a> </li>
                                                <li><a href="/danh-muc/du-an.html">Nhà phố</a></li> -->
                                                 <li><a href="http://localhost/laravel-5.3/Du_an_NhaDat">Nhà đất</a></li>
                                             </ul>
                              </li>

                              <li class="nav-item "><a href="#">Cho thuê <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="http://localhost/laravel-5.3/TinTuc_DuAn/TinTuc_video/Datthue">Đất cho thuê</a></li>
                                               <!--  <li><a href="/danh-muc/cho-thue.html">Biệt thự cho thuê</a></li>
                                                <li><a href="/danh-muc/cho-thue.html">Nhà phố cho thuê</a></li>
                                                <li><a href="/danh-muc/cho-thue.html">Gian hàng & kios</a></li> -->
                                            </ul>
                               </li>

                               <li class="nav-item"><a href="#">Tin tức <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                             <ul >
                                                <li><a href="http://localhost/laravel-5.3/TinTuc_DuAn/TinTuc_VanBan">Tin tức văn bản</a></li>
                                               
                                                <li><a href="http://localhost/laravel-5.3/TinTuc_DuAn/TinTuc_video">Tin tức video</a></li>
                                             </ul>
                                </li>
                          <!--   <li class="nav-item"><a href="">Liên hệ</a></li> -->
                            <li class="nav-item hidden-xs hidden-sm">
                                <a style="font-size: 14px;" href="tel:0799.098.098">Hotline: 0799.098.098</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="logo">
                        <a href="/"><img src="public/site/img/logo.jpg" alt="PNN LAND"></a>
                    </div>
                </div>

                
            </div>
        </div>        
    </section>
</header>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 400) {
                $('#goTop').fadeIn();
            } else {
                $('#goTop').fadeOut();
            }
        });
        $('#goTop').click(function () {
            $("html, body").animate({scrollTop: 0}, 600);
            return false;
        });
    });

    wow = new WOW(
            {
                mobile: false,
            })
    wow.init();

    $('document').ready(function () {
        var url = window.location.href;
        $("#myMenu a").each(function () {
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
            }
        });
    });



    $('document').ready(function () {

        $(window).scroll(function () {
            if (ww > 1200) {
                if ($(this).scrollTop() > 200) {
                    $('.menu').css('position', 'fixed');
                    $('.menu').css('width', '100%');
                    $('.menu').css('z-index', '1000000');
                    $('.menu').css('top', '0');
                    $('.menu').css('padding-bottom', '0');
                    $('.main-menu').css('margin-bottom', '-10px');
                    $('.menu').css('right', '15px');
                    $('.menu').css('border-bottom', '1px solid #ccc');
                    $('.main-menu').css('border', 'none');
                    $('.nav li').css('padding', '10px');
                    $('.nav > li:nth-child(4)').css('padding-right', '5px');
//                    $('.nav > li:nth-child(5), .nav > li:nth-child(6), .nav > li:nth-child(7)').css('left', '-120px');
                    $('.logo').css('height', '40px');
                    $('.logo').css('top', '-40px');
                    $('.nav li li').css('padding', '0px');
                    $('.menu').removeClass('fadeInDown');
                    $('.menu').addClass('fadeInDown');

                } else {
                    $('.menu').css('position', 'relative');
                    $('.menu').css('width', 'auto');
                    $('.menu').css('right', '0px');
                    $('.menu').css('border', 'none');
                    $('.nav li').css('padding', '50px 10px');
                    $('.nav > li:nth-child(4)').css('padding-right', '5px');
//                    $('.nav > li:nth-child(5), .nav > li:nth-child(6), .nav > li:nth-child(7)').css('left', '-120px');
                    $('.logo').css('height', 'auto');
                    $('.logo').css('top', '-80px');
                    $('.nav li li').css('padding', '0px');
                }
            } else {
                if ($(this).scrollTop() > 200) {
                    $('.menu').css('position', 'fixed');
                    $('.menu').css('width', '100%');
                    $('.menu').css('z-index', '1000000');
                    $('.menu').css('top', '0');
                    $('.menu').css('padding-bottom', '0');
                    $('.main-menu').css('margin-bottom', '-10px');
                    $('.menu').css('right', '15px');
                    $('.menu').css('border-bottom', '1px solid #ccc');
                    $('.main-menu').css('border', 'none');
                    $('.menu').removeClass('fadeInDown');
                    $('.menu').addClass('fadeInDown');
                    $('.nav li').css('padding', '10px');
                    $('.nav > li:nth-child(4)').css('padding-right', '0');
                    $('.nav > li:nth-child(5), .nav > li:nth-child(6), .nav > li:nth-child(7)').css('left', '0');
                    $('.logo').css('top', '-45px');
                    $('.nav li li').css('padding', '0px');
                    $('.nav').css('margin-top', '-10px');
                    $('.toggleMenu').css('margin-bottom', '20px');
                    $('.search-mobile').css('top', '35px');
                    $('.search-close').css('top', '35px');

                } else if ($(this).scrollTop() > 199) {
                    $('.search-mobile').css('top', '100px');
                    $('.search-close').css('top', '100px');
                } else {
                    $('.menu').css('position', 'relative');
                    $('.menu').css('width', 'auto');
                    $('.menu').css('right', '0px');
                    $('.menu').css('border', 'none');
                    $('.menu').removeClass('fadeInDown');
                    $('.nav li').css('padding', '50px 10px');
                    $('.nav > li:nth-child(4)').css('padding-right', '0');
                    $('.nav > li:nth-child(5), .nav > li:nth-child(6), .nav > li:nth-child(7)').css('left', '0');
                    $('.logo').css('top', '-80px');
                    $('.nav li li').css('padding', '0px');
                    $('.search-mobile').css('top', '35px');
                    $('.search-close').css('top', '35px');
                }
            }
        });

        $(window).scroll(function () {
            if (ww < 500) {
                if ($(this).scrollTop() > 200) {
                    $('.search').css('position', 'fixed');
                    $('.search').css('top', '46px')

                } else {
                    $('.search').css('position', 'absolute');
                    $('.search').css('top', '120px')
                }

            } else {

            }
        });

        $('.search-mobile').click(function () {
            $(this).fadeOut();
            $(this).css('display', 'none');
            $('.search').css('display', 'block');
            $('.search').addClass('.search-close');
            $('.search-close').fadeIn();
            $('.search-close').css('display', 'block')

        });
        $('.search-close').click(function () {
            $(this).fadeOut();
            $(this).css('display', 'none');
            $('.search').css('display', 'none');
            $('.search-mobile').fadeIn();
            $('.search-mobile').css('display', 'block')
        });
    });


    $('.slider-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: true,
        nav: true,
        navText: ["<i class='fa fa-caret-left' aria-hidden='true'></i>", "<i class='fa fa-caret-right' aria-hidden='true'></i>"],
        autoplaySpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });


    $(document).ready(function () {
        $(".toggleMenu").css("display", "none");
        $(".nav li").hover(function () {
            $(this).addClass('hover');
        }, function () {
            $(this).removeClass('hover');
        });
    });
    $(document).ready(function () {
        var ww = document.body.clientWidth;
        if (ww < 1200) {
            $(".toggleMenu").css("display", "inline-block");
            $(".nav li a").click(function () {
                $(this).parent("li").toggleClass('hover');
            });
        } else {
            $(".toggleMenu").css("display", "none");
            $(".nav li").hover(function () {
                $(this).addClass('hover');
            }, function () {
                $(this).removeClass('hover');
            });
        }
    });
    $(".toggleMenu").click(function (e) {
        e.preventDefault();
        $(".nav").toggle();
    });
    if (ww < 1200) {
        $(".toggleMenu").css("display", "inline-block");
        $(".nav").hide();
    } else {
    }
    var ww = document.body.clientWidth;
    $(document).ready(function () {
        $(".toggleMenu").click(function (e) {
            e.preventDefault();
            $(".nav").toggle();
            $('.nav').css('transform', 'none');
        });
        $(".nav li a").each(function () {
            if ($(this).next().length > 0) {
                $(this).addClass("parent");
            }
            ;
        })
        adjustMenu();
    });
    function adjustMenu() {
        if (ww < 1200) {
            $(".toggleMenu").css("display", "inline-block");
            $(".nav").hide();
            $(".nav li i").click(function (e) {
                e.preventDefault();
                $(this).parent("li").toggleClass('hover');
            });
        } else {
            $(".toggleMenu").css("display", "none");
            $(".nav li").hover(function () {
                $(this).addClass('hover');
            }, function () {
                $(this).removeClass('hover');
            });
        }
    }
    $(document).ready(function () {
        $(".toggleMenu").click(function (e) {
            e.preventDefault();
            $(this).toggleClass("active");
            $(".nav").toggle();
        });
    });
    if (ww < 1200) {
        $(".toggleMenu").css("display", "inline-block");
        if (!$(".toggleMenu").hasClass("active")) {
            $(".nav").hide();
        } else {
            $(".nav").show();
        }
        $(".nav li a.parent").click(function (e) {
            e.preventDefault();
            $(this).parent("li").toggleClass('hover');
        });
    }
    if (ww < 1200) {
        $(".toggleMenu").css("display", "inline-block");
        if (!$(".toggleMenu").hasClass("active")) {
            $(".nav").hide();
        } else {
            $(".nav").show();
        }
        $(".nav li").unbind('mouseenter mouseleave');
        $(".nav li a.parent").unbind("click").bind("click", function (e) {
            e.preventDefault();
            $(this).parent("li").toggleClass('hover');
        });
    } else {
        $(".toggleMenu").css("display", "none");
        $(".nav").show();
        $(".nav li").removeClass("hover");
        $(".nav li a").unbind("click");
        $(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function () {
            $(this).toggleClass('hover');
        });
    }
    ;



</script>
    <a href="#" id="goTop" class="bd-circle t-center wow zoomInRight" data-wow-duration="2s"><i class="fa fa-location-arrow" aria-hidden="true"></i>
    </a>

    <article>

    <section class="search">
   
</section>
    <section class="ban-1">
        <div class="container">
                    </div>
    </section>

    <section class="ban-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 title-page">
                    <h1>Bất động sản Dự án</h1>
                </div>
                                    <div class="col-sm-6 text-right">
                        <ul class="nav-tabs" role="tablist">
                                                            <li class="active"><a href="#ban0" role="tab" data-toggle="tab">Biệt thự</a></li>
                                                            <li class=""><a href="#ban1" role="tab" data-toggle="tab">Nhà phố</a></li>
                                                            <li class=""><a href="#ban2" role="tab" data-toggle="tab">Nhà đất</a></li>
                                                    </ul>
                    </div>
                            </div>
                            <div class="tab-content">
                                            <div class="tab-pane fade in active " id="ban0">

                            <div class="swiper-container swiper-dangCap">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">

                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/ban-nhanh-lo-dat-doi-dien-tttm-phu-nhan-nghia.html"><img src="uploads/images/product/1543660453_dji_0020.jpg" alt="Bán nhanh lô đất đối diện TTTM Phú Nhân Nghĩa"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/ban-nhanh-lo-dat-doi-dien-tttm-phu-nhan-nghia.html">Bán nhanh lô đất đối diện TTTM Phú Nhân Nghĩa</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/ban-nhanh-lo-dat-doi-dien-tttm-phu-nhan-nghia.html">Bán nhanh lô đất 200m2 vị trí đầu tư đắc địa - đối diện trung tâm thương mại tại dự án Khu dân cư Phú Nhân Nghĩa, Thị Xã Kỳ Anh. Tọa lạc ngay góc tuyến đường Quốc lộ 1A và Nguyễn Thị Bích Châu, dự án với diện tích 16,34hecta, được đầu tư và hoàn thành 2 giai đoạn, giai đoạn 1 là 9.9ha, giai đoạn 2 là 6.44ha. Dự án được quy hoạch và xây dựng đồng bộ gồm nhiều phân khu chức năng. </a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 1,72 tỷ</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: PNN Complex</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543660453_dji_0004.jpg"><img src="uploads/images/product/1543660453_dji_0004.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543660453_dji_0005.jpg"><img src="uploads/images/product/1543660453_dji_0005.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543660453_dji_0008.jpg"><img src="uploads/images/product/1543660453_dji_0008.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                     <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/ban-dat-khu-do-thi-hung-phu-thi-xa-ky-anh.html"><img src="uploads/images/product/1543722293_hf8.jpg" alt="Bán đất khu đô thị Hưng Phú-Thị xã Kỳ Anh"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/ban-dat-khu-do-thi-hung-phu-thi-xa-ky-anh.html">Bán đất khu đô thị Hưng Phú-Thị xã Kỳ Anh</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/ban-dat-khu-do-thi-hung-phu-thi-xa-ky-anh.html">Bán đất khu đô thị Hưng Phú tại khối 1, phường Sông Trí, thị xã Kỳ Anh, Hà Tĩnh. Ngay ngã 3 Việt Lào, sau Vincom.
Diện tích 119 m2. Sổ đỏ chính chủ.</a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 1,18 tỷ</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: Sông Trí</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543722293_hf10.jpg"><img src="uploads/images/product/1543722293_hf10.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543722293_hf11.jpg"><img src="uploads/images/product/1543722293_hf11.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543722293_hf12.jpg"><img src="uploads/images/product/1543722293_hf12.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/ban-dat-khu-do-thi-hung-phu-thi-xa-ky-anh.html"><img src="uploads/images/product/1543734872_dji_0018.jpg" alt="Đất nền biệt thự Kỳ Anh"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/ban-dat-khu-do-thi-hung-phu-thi-xa-ky-anh.html">Đất nền biệt thự Kỳ Anh</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/ban-dat-khu-do-thi-hung-phu-thi-xa-ky-anh.html">Đất biệt thự đơn lập, 100% thổ cư. Xây dựng tự do.</a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: Chỉ từ 3,5tr/m2</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: Kỳ Châu</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543734872_daybt02.jpg"><img src="uploads/images/product/1543734872_daybt02.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543734872_daybt3..jpg"><img src="uploads/images/product/1543734872_daybt3..jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543734872_daybt3.jpg"><img src="uploads/images/product/1543734872_daybt3.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/dat-biet-thu-mat-tien-15m.html"><img src="uploads/images/product/1548726317_50937081_291127404862790_2945519821778845696_n1.jpg" alt="Đất biệt thự mặt tiền 15m"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/dat-biet-thu-mat-tien-15m.html">Đất biệt thự mặt tiền 15m</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/dat-biet-thu-mat-tien-15m.html"></a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 800Tr</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: PNN Complex</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548726317_50856892_404545940318323_8629027246889238528_n1.jpg"><img src="uploads/images/product/1548726317_50856892_404545940318323_8629027246889238528_n1.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548726317_50937081_291127404862790_2945519821778845696_n1.jpg"><img src="uploads/images/product/1548726317_50937081_291127404862790_2945519821778845696_n1.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548726317_51290771_2094166570700817_160280010458923008_n11.jpg"><img src="uploads/images/product/1548726317_51290771_2094166570700817_160280010458923008_n11.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html"><img src="uploads/images/product/1548150242_l10_da_sua.jpg" alt="Chỉ còn 1 lô góc vào trung tâm thương mại PNN COMPLEX"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html">Chỉ còn 1 lô góc vào trung tâm thương mại PNN COMPLEX</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html"></a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 1,76 tỷ</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: PNN Complex</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548150096_50283567_2335667716463768_9011240741657116672_n.jpg"><img src="uploads/images/product/1548150096_50283567_2335667716463768_9011240741657116672_n.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548150096_l10_da_sua.jpg"><img src="uploads/images/product/1548150096_l10_da_sua.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548150096_l10.2_da_sua.jpg"><img src="uploads/images/product/1548150096_l10.2_da_sua.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                                            <div class="tab-pane fade  " id="ban1">

                            <div class="swiper-container swiper-dangCap">
                                <div class="swiper-wrapper">

                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/ban-nhanh-lo-dat-doi-dien-tttm-phu-nhan-nghia.html"><img src="uploads/images/product/1543660453_dji_0020.jpg" alt="Bán nhanh lô đất đối diện TTTM Phú Nhân Nghĩa"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/ban-nhanh-lo-dat-doi-dien-tttm-phu-nhan-nghia.html">Bán nhanh lô đất đối diện TTTM Phú Nhân Nghĩa</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/ban-nhanh-lo-dat-doi-dien-tttm-phu-nhan-nghia.html">Bán nhanh lô đất 200m2 vị trí đầu tư đắc địa - đối diện trung tâm thương mại tại dự án Khu dân cư Phú Nhân Nghĩa, Thị Xã Kỳ Anh. Tọa lạc ngay góc tuyến đường Quốc lộ 1A và Nguyễn Thị Bích Châu, dự án với diện tích 16,34hecta, được đầu tư và hoàn thành 2 giai đoạn, giai đoạn 1 là 9.9ha, giai đoạn 2 là 6.44ha. Dự án được quy hoạch và xây dựng đồng bộ gồm nhiều phân khu chức năng. </a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 1,72 tỷ</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: PNN Complex</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543660453_dji_0004.jpg"><img src="uploads/images/product/1543660453_dji_0004.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543660453_dji_0005.jpg"><img src="uploads/images/product/1543660453_dji_0005.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543660453_dji_0008.jpg"><img src="uploads/images/product/1543660453_dji_0008.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/ban-nha-pho-lien-ke-mat-tien-duong-ql12-viet-lao.html"><img src="uploads/images/product/1543734172_hf24.jpg" alt="Bán nhà phố liền kề, mặt tiền đường QL12 Việt Lào"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/ban-nha-pho-lien-ke-mat-tien-duong-ql12-viet-lao.html">Bán nhà phố liền kề, mặt tiền đường QL12 Việt Lào</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/ban-nha-pho-lien-ke-mat-tien-duong-ql12-viet-lao.html"></a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 3 tỷ 50tr.</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: Sông Trí</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543734172_hf20.jpg"><img src="uploads/images/product/1543734172_hf20.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543734172_hf23.jpg"><img src="uploads/images/product/1543734172_hf23.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543734172_hf25.jpg"><img src="uploads/images/product/1543734172_hf25.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html"><img src="uploads/images/product/1548150242_l10_da_sua.jpg" alt="Chỉ còn 1 lô góc vào trung tâm thương mại PNN COMPLEX"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html">Chỉ còn 1 lô góc vào trung tâm thương mại PNN COMPLEX</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html"></a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 1,76 tỷ</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: PNN Complex</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548150096_50283567_2335667716463768_9011240741657116672_n.jpg"><img src="uploads/images/product/1548150096_50283567_2335667716463768_9011240741657116672_n.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548150096_l10_da_sua.jpg"><img src="uploads/images/product/1548150096_l10_da_sua.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548150096_l10.2_da_sua.jpg"><img src="uploads/images/product/1548150096_l10.2_da_sua.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                                            <div class="tab-pane fade  " id="ban2">

                            <div class="swiper-container swiper-dangCap">
                                <div class="swiper-wrapper">

                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/dat-nen-biet-thu-lo-goc-2-mat-tien.html"><img src="uploads/images/product/1543660245_dji_0068.jpg" alt="Đất nền biệt thự lô góc 2 mặt tiền"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/dat-nen-biet-thu-lo-goc-2-mat-tien.html">Đất nền biệt thự lô góc 2 mặt tiền</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/dat-nen-biet-thu-lo-goc-2-mat-tien.html">Bán lhttp://bdskyanh.com/chi-tiet-du-an/dat-nen-biet-thu-lo-goc-2-mat-tien.htmlô đất biệt thự đơn lập 2 mặt tiền đường 34 mét dự án Khu dân cư Phú Nhân Nghĩa, 100% thổ cư. Xây dựng tự do. Đất sạch, tiện xây biệt thự ở ngay.</a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 1,96 tỷ</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: PNN Complex</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543660245_dji_0001.jpg"><img src="uploads/images/product/1543660245_dji_0001.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543660245_dji_0002.jpg"><img src="uploads/images/product/1543660245_dji_0002.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1543660245_dji_0003.jpg"><img src="uploads/images/product/1543660245_dji_0003.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/dat-biet-thu-mat-tien-15m.html"><img src="uploads/images/product/1548726317_50937081_291127404862790_2945519821778845696_n1.jpg" alt="Đất biệt thự mặt tiền 15m"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/dat-biet-thu-mat-tien-15m.html">Đất biệt thự mặt tiền 15m</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/dat-biet-thu-mat-tien-15m.html"></a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 800Tr</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: PNN Complex</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548726317_50856892_404545940318323_8629027246889238528_n1.jpg"><img src="uploads/images/product/1548726317_50856892_404545940318323_8629027246889238528_n1.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548726317_50937081_291127404862790_2945519821778845696_n1.jpg"><img src="uploads/images/product/1548726317_50937081_291127404862790_2945519821778845696_n1.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1548726317_51290771_2094166570700817_160280010458923008_n11.jpg"><img src="uploads/images/product/1548726317_51290771_2094166570700817_160280010458923008_n11.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/dat-1a-doi-dien-cong-chao-xa-ky-tho.html"><img src="uploads/images/product/1554300482_55945004_395066481274448_3205472390951731200_n11.jpg" alt="đất 1A đối diện cổng chào xã Kỳ Thọ"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/dat-1a-doi-dien-cong-chao-xa-ky-tho.html">đất 1A đối diện cổng chào xã Kỳ Thọ</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/dat-1a-doi-dien-cong-chao-xa-ky-tho.html"></a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 980tr</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: đối diện cây xăng Sơn Hiền, xã Kỳ Thọ, huyện Kỳ Anh</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1554300482_55793600_320595698613726_4232539649999896576_n1.jpg"><img src="uploads/images/product/1554300482_55793600_320595698613726_4232539649999896576_n1.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1554300482_55945004_395066481274448_3205472390951731200_n11.jpg"><img src="uploads/images/product/1554300482_55945004_395066481274448_3205472390951731200_n11.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1554300482_56355258_2043027572493682_6116456866034745344_nj.jpg"><img src="uploads/images/product/1554300482_56355258_2043027572493682_6116456866034745344_nj.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/dat-2-mat-tien-sau-mam-non-hoa-trang-nguyen.html"><img src="uploads/images/product/1554302417_55949092_443842293021448_5929362507163500544_n1.jpg" alt="Đất 2 mặt tiền sau mầm non Hoa Trạng Nguyên"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/dat-2-mat-tien-sau-mam-non-hoa-trang-nguyen.html">Đất 2 mặt tiền sau mầm non Hoa Trạng Nguyên</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/dat-2-mat-tien-sau-mam-non-hoa-trang-nguyen.html"></a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 1,05 tỷ</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: Phường Sông trí, thị xã Kỳ Anh</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1554302417_55949092_443842293021448_5929362507163500544_n1.jpg"><img src="uploads/images/product/1554302417_55949092_443842293021448_5929362507163500544_n1.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1554302417_56237445_345465279417122_4302059210423664640_n1.jpg"><img src="uploads/images/product/1554302417_56237445_345465279417122_4302059210423664640_n1.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/dat-kinh-doanh-cach-1a-100m-sau-mam-non-hoa-trang-nguyen.html"><img src="uploads/images/product/1554644092_55949092_443842293021448_5929362507163500544_n1.jpg" alt="Đất Kinh Doanh cách 1A 100m sau mầm non Hoa Trạng Nguyên"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/dat-kinh-doanh-cach-1a-100m-sau-mam-non-hoa-trang-nguyen.html">Đất Kinh Doanh cách 1A 100m sau mầm non Hoa Trạng Nguyên</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/dat-kinh-doanh-cach-1a-100m-sau-mam-non-hoa-trang-nguyen.html"></a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 770tr</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: Phường Sông trí, thị xã Kỳ Anh, cách quốc lộ 1A 100m, cách vincom 200m</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1554644092_55949092_443842293021448_5929362507163500544_n1.jpg"><img src="uploads/images/product/1554644092_55949092_443842293021448_5929362507163500544_n1.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1554644092_56237445_345465279417122_4302059210423664640_n1.jpg"><img src="uploads/images/product/1554644092_56237445_345465279417122_4302059210423664640_n1.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/dat-kinh-doanh-mat-tien-bich-chau.html"><img src="uploads/images/product/1554646770_56448960_2100138316733094_2395612258106343424_n1.jpg" alt="Đất kinh doanh mặt tiền bích châu"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/dat-kinh-doanh-mat-tien-bich-chau.html">Đất kinh doanh mặt tiền bích châu</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/dat-kinh-doanh-mat-tien-bich-chau.html"></a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 700tr</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: </li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1554646770_55961886_306729493330731_248974452375683072_n.jpg"><img src="uploads/images/product/1554646770_55961886_306729493330731_248974452375683072_n.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1554646770_56448950_586018908541529_6321215639415422976_n1.jpg"><img src="uploads/images/product/1554646770_56448950_586018908541529_6321215639415422976_n1.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1554646770_56448960_2100138316733094_2395612258106343424_n1.jpg"><img src="uploads/images/product/1554646770_56448960_2100138316733094_2395612258106343424_n1.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                          

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1563805548_66922594_643076642856060_8911200245979807744_n.jpg"><img src="uploads/images/product/1563805548_66922594_643076642856060_8911200245979807744_n.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1563805548_67059266_488364398593959_7230524507344076800_n1.jpg"><img src="uploads/images/product/1563805548_67059266_488364398593959_7230524507344076800_n1.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1563805548_67192001_357454608253227_7224639057823793152_n1.jpg"><img src="uploads/images/product/1563805548_67192001_357454608253227_7224639057823793152_n1.jpg"></a>
                                                            </div>
                                                                                                                    <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1563805548_67494895_914824392201551_834404994768699392_n11.jpg"><img src="uploads/images/product/1563805548_67494895_914824392201551_834404994768699392_n11.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide box-project-2">
                                            <div class="row dang-cap-1">
                                                <div class="col-md-9 col-sm-7 col-xs-6 box-project-2-info">
                                                    <div class="">
                                                        <a href="http://bdskyanh.com/chi-tiet-du-an/ban-nhanh-lo-dat-mat-tien-1a-gan-ngay-cong-chao-xa-ky-tho-da-ban-xong.html"><img src="uploads/images/product/1563807343_62143574_504413687031138_8067791642549026816_n.jpg" alt="bán nhanh lô đất mặt tiền 1A, gần ngay cổng chào xã Kỳ Thọ( đã bán xong)"></a>
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/ban-nhanh-lo-dat-mat-tien-1a-gan-ngay-cong-chao-xa-ky-tho-da-ban-xong.html">bán nhanh lô đất mặt tiền 1A, gần ngay cổng chào xã Kỳ Thọ( đã bán xong)</a></h4>
                                                        <h5 class="hidden-xs"><a href="http://bdskyanh.com/chi-tiet-du-an/ban-nhanh-lo-dat-mat-tien-1a-gan-ngay-cong-chao-xa-ky-tho-da-ban-xong.html"></a></h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-5 col-xs-6 box-project-2-desc">
                                                    <div class="">
                                                        <ul>
                                                            <li><i class="fa fa-money" aria-hidden="true"></i> Giá: 1 tỷ 300tr</li>
                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> Khu vực: thôn Tân Thọ, xã Kỳ Thọ, huyện Kỳ Anh, tĩnh Hà Tĩnh</li>
                                                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 0799.098.098</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row dang-cap">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="owl-carousel dangCap-carousel owl-theme">
                                                                                                                                                                            <div class="item">
                                                                <a data-fancybox="gallery" href="uploads/images/product/1563807343_61865655_2253555114897877_4302720863020515328_n.jpg"><img src="uploads/images/product/1563807343_61865655_2253555114897877_4302720863020515328_n.jpg"></a>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                                    </div>
                    </div>
    </section>
</article>

<script>
    var Swiper = new Swiper('.swiper-dangCap', {
        slidesPerView: 1,
        slidesPerColumn: 4,
        spaceBetween: 30,
        breakpoints: {
            1024: {
                slidesPerView: 1,
                slidesPerColumn: 3,
            },
            768: {
                slidesPerView: 1,
                slidesPerColumn: 1,
            },

        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var paneTarget = $(e.target).attr('href');
        var $thePane = $('.tab-pane' + paneTarget);
        var paneIndex = $thePane.index();
        console.log($thePane);
        if ($thePane.find('.swiper-container').length > 0 && 0 === $thePane.find('.swiper-slide-active').length) {
            Swiper[paneIndex].update();
        }
    });

</script>

<script type="text/javascript">
    $('.dangCap-carousel').owlCarousel({
        loop: false,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: false,
        nav: true,
        margin: 5,
        navText: ["<i class='fa fa-caret-left' aria-hidden='true'></i>", "<i class='fa fa-caret-right' aria-hidden='true'></i>"],
        autoplaySpeed: 1000,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script>
    $('document').ready(function () {
        $(".playlist li").on("click", function () {
            var videoArea = $(this).closest('.box-video').find('.videoarea');
            if (videoArea.length) {
                videoArea.attr({
                    "src": $(this).attr("movieurl"),
                    "poster": "",
                    "autoplay": "autoplay"
                });
            }
        });

        $(".videoarea").attr({
            "src": $(".playlist li").eq(0).attr("movieurl"),

        });

        $('.playlist').on('click', '.video-box', function () {
            $('.video-box').removeClass('video-active');
            $(this).addClass('video-active')
        });
        $('.playlist li:first-child').addClass('video-active')
    });
</script>
    <footer>
    <section class="footer-top wow slideInUp">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-4 col-sm-5 hidden-xs footer-top-left">
                    <i class="fa fa-envelope-open" aria-hidden="true"></i>

                </div>

                <div class="col-lg-6 col-md-5 col-sm-7">
                    <form>
                      
                    </form>
                </div>

                <script>
                    $('#submitEmail').click(function () {
                        let email = $('#email').val();

                        if (email) {
                            $.ajax({
                                method: "POST",
                                url: "/home/email",
                                data: {email: email}
                            })
                                    .done(function (msg) {

                                        alert("Đăng kí email thành công! Cảm ơn bạn");
                                        return false;
                                    });
                        }
                    })
                </script>

                <div class="col-lg-3 col-md-3 hidden-sm footer-top-right text-right">
                    <a href="https://www.facebook.com/BDS.PhuGiaHung/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="a" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="a" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="a" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 info-company wow fadeInLeft"  data-wow-delay="0.3s">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    thông tin công ty <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a href="index.php"><img src="public/site/img/logo.jpg" alt="PNN LAND"></a>
                                <h5><span style="font-size:18px;display:block;margin: 8px 0;">CTY TNHH TM & DV PHÚ GIA HƯNG</span> Chúng tôi luôn mang đến cho khách hàng những dịch vụ tốt nhất.</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 info-contact wow fadeInLeft">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    thông tin liên hệ <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li><i class="fa fa-address-book" aria-hidden="true"></i>KP2, Phường Sông Trí, TX Kỳ Anh, Hà Tĩnh</li>

                                    <li><i class="fa fa-phone-square" aria-hidden="true"></i>0799.098.098</li>

                                    <li><i class="fa fa-envelope-square" aria-hidden="true"></i>pgh@bdskyanh.com</li>

                                    <li><i class="fa fa-globe" aria-hidden="true"></i>www.bdskyanh.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4 link-footer wow fadeInRight">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    danh mục <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Dự án</a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Bán</a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Cho thuê</a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Tin tức</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-8 maps wow fadeInRight" data-wow-delay="0.3s">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                    bản đồ <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1214.251002784393!2d106.28931985454011!3d18.078522299206067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313889b79e248e6b%3A0xdca9596ebd3a69d!2zRG9hbmggTmdoaeG7h3AgVsOgbmcgQuG6oWMgUGjDuiBOaMOibiBOZ2jEqWE!5e1!3m2!1svi!2s!4v1543328201059" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="footer-bottom wow fadeInDown" >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Copyright @ 2018 www.bdskyanh.com. All Reserved. Designed by <a href="http://edu.edu.vn" target="_blank">Edu tech</a></h5>
                </div>

                <div class="col-md-6 text-right">
                    <ul>
                        <li>
                            <a href="/dieu-khoan-su-dung.html">Điều khoản sử dụng </a>
                        </li>

                        <li>
                            <a href="/chinh-sach-bao-mat.html">Chính sách bảo mật </a>
                        </li>

                        <li>
                            <a href="/cau-hoi-thuong-gap.html">Câu hỏi thường gặp </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
    <script>
        var swiper = new Swiper('.swiper-ban', {
            slidesPerView: 2,
            slidesPerColumn: 2,
            spaceBetween: 30,
            breakpoints: {
                1024: {
                    slidesPerView: 2,
                    slidesPerColumn: 2,
                },
                768: {
                    slidesPerView: 1,
                    slidesPerColumn: 2,
                },

            },
            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
            },

        });
    </script>
    <script>
        $('document').ready(function () {
            $(".playlist li").on("click", function () {
                var videoArea = $(this).closest('.box-video').find('.videoarea');
                if (videoArea.length) {
                    videoArea.attr({
                        "src": $(this).attr("movieurl"),
                        "poster": "",
                        "autoplay": "autoplay"
                    });
                }
            });

            $(".videoarea").attr({
                "src": $(".playlist li").eq(0).attr("movieurl"),

            });

            $('.playlist').on('click', '.video-box', function () {
                $('.video-box').removeClass('video-active');
                $(this).addClass('video-active')
            });
            $('.playlist li:first-child').addClass('video-active')
        });
    </script>

    <script type="text/javascript">
        $('.slider-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: true,
            nav: true,
            animateOut: 'bounceOutLeft',
            animateIn: 'bounceInRight',
            navText: ["<i class='fa fa-caret-left' aria-hidden='true'></i>", "<i class='fa fa-caret-right' aria-hidden='true'></i>"],
            autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

    <script type="text/javascript">
        $('.projectHome-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false,
            nav: true,
            margin: 30,
            navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
            autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>

    <script type="text/javascript">
        $('.chothue-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false,
            nav: true,
            margin: 30,
            navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
            autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>

    <script type="text/javascript">
        $('.quangcao-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false,
            nav: false,
            margin: 50,
            navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
            autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
    <script>
        $('document').ready(function () {
            if (ww < 767) {
                $('.footer-top input').attr('placeholder', 'Nhập email để nhận tin mới...')
            }
            ;
            if (ww > 500) {
                $('.panel-collapse').addClass('in');
            }
            ;
            $('.footer-top button').hover(function () {
                $(this).html('<i class="fa fa-paper-plane" aria-hidden="true"></i>');
            });
            $('.footer-top button').mouseleave(function () {
                $(this).text('ĐĂNG KÝ');
            });
        });
    </script>
</body>
</html>