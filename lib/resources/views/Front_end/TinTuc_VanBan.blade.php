
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

        <title>Tin tức văn bản</title>

        <meta name="keywords" content="Tin tức văn bản"/>
        <meta name="description" content="Tin tức văn bản"/>

		<link rel="shortcut icon" href="/public/site/img/favicon.ico">
        <!--Meta share facebook-->
        <meta property="og:url" content="/tin-tuc/tin-tuc-van-ban.html"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Tin tức văn bản"/>
        <meta property="og:description" content="Tin tức văn bản"/>
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
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=787765534758166&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131450303-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-131450303-1');
	</script>

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
    <!--<div class="se-pre-con"></div>-->
    <section class="header-top">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
					<div class="visible-xs">Hotline: 0799.098.098</div>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs text-right">
                    <div class="header-top-2">
                        <a href="https://www.facebook.com/BDS.PhuGiaHung/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="a" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="a" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="a" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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
    <section class="news-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title-page">
                    <h1>Tin tức văn bản</h1>
                </div>
            </div>
                            <div class="row">
                                            <div class="col-md-4 col-sm-6 box-news-page">
                            <div class="news-page-img">
                                <div class="icon-news">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                                <a href="http://bdskyanh.com/tin-tuc/5-bi-quyet-dau-tu-dat-nen-du-an-khong-bao-gio-loi-thoi.html">
                                    <img src="uploads/images/news/1545382834_sohong.jpg" alt="5 bí quyết đầu tư đất nền dự án không bao giờ lỗi thời">
                                </a>
                            </div>

                            <h4><a href="http://bdskyanh.com/tin-tuc/5-bi-quyet-dau-tu-dat-nen-du-an-khong-bao-gio-loi-thoi.html">5 bí quyết đầu tư đất nền dự án không bao giờ lỗi thời</a></h4>
                            <h5><i class="fa fa-clock-o" aria-hidden="true"></i> 21/12/2018</h5>

                            <p>Đầu tư đất nền dự án dù là một kênh đầu tư bất động sản cụ thể nhưng cũng có rất nhiều yếu tố liên quan làm nên giá trị một thửa đất hữu dụng và cho tiềm năng sinh lợi cao. Vậy đầu tư đất nền dự án nên quan tâm đến vấn đề gì?</p>

                            <div class="news-page-btn">
                                <a href="http://bdskyanh.com/tin-tuc/5-bi-quyet-dau-tu-dat-nen-du-an-khong-bao-gio-loi-thoi.html">Xem thêm <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    <div class="col-md-4 col-sm-6 box-news-page">
                            <div class="news-page-img">
                                <div class="icon-news">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                                <a href="http://bdskyanh.com/tin-tuc/nhung-luu-y-khong-the-bo-qua-truoc-khi-dat-coc-mua-nha.html">
                                    <img src="uploads/images/news/1545376989_datcocmuanha.jpg" alt="Những lưu ý không thể bỏ qua trước khi đặt cọc mua nhà">
                                </a>
                            </div>

                            <h4><a href="http://bdskyanh.com/tin-tuc/nhung-luu-y-khong-the-bo-qua-truoc-khi-dat-coc-mua-nha.html">Những lưu ý không thể bỏ qua trước khi đặt cọc mua nhà</a></h4>
                            <h5><i class="fa fa-clock-o" aria-hidden="true"></i> 21/12/2018</h5>

                            <p>Bất kỳ giao dịch bất động sản nào cũng cần đặt cọc tiền, hiện kim để giữ chỗ nhưng không phải ai cũng biết những quy định pháp luật, lưu ý để đảm bảo quyền lợi cho bản thân. Đặt cọc mua nhà cần chú ý những điểm này để tránh mất tiền cọc oan uổng hoặc mua nhầm nhà khó sử dụng, chuyển nhượng.</p>
                            <div class="news-page-btn">
                                <a href="http://bdskyanh.com/tin-tuc/nhung-luu-y-khong-the-bo-qua-truoc-khi-dat-coc-mua-nha.html">Xem thêm <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

          <div class="col-md-4 col-sm-6 box-news-page">
                            <div class="news-page-img">
                                <div class="icon-news">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                                <a href="http://bdskyanh.com/tin-tuc/lan-song-khach-ngoai-tinh-o-at-do-ve-ha-noi-mua-nha-ngay-cang-tang.html">
                                    <img src="uploads/images/news/1543538213_lansong.png" alt="“Làn sóng” khách ngoại tỉnh ồ ạt đổ về Hà Nội mua nhà ngày càng tăng">
                                </a>
                            </div>

                            <h4><a href="http://bdskyanh.com/tin-tuc/lan-song-khach-ngoai-tinh-o-at-do-ve-ha-noi-mua-nha-ngay-cang-tang.html">“Làn sóng” khách ngoại tỉnh ồ ạt đổ về Hà Nội mua nhà ngày càng tăng</a></h4>
                            <h5><i class="fa fa-clock-o" aria-hidden="true"></i> 02/12/2018</h5>

                            <p>Theo đánh giá của các chuyên gia, hiện nay nhu cầu mua nhà Hà Nội để phục vụ học tập, làm việc, thậm chí đầu tư đã khiến nhiều khu chung cư có số cư dân là người ngoại tỉnh lên đến trên 50%. Đây là nguồn khách hàng tiềm năng của các dự án BĐS đang có lượng tồn dư hàng hóa lớn.</p>
                            <div class="news-page-btn">
                                <a href="http://bdskyanh.com/tin-tuc/lan-song-khach-ngoai-tinh-o-at-do-ve-ha-noi-mua-nha-ngay-cang-tang.html">Xem thêm <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                             </div>
                          </div>

               <div class="col-md-4 col-sm-6 box-news-page">
                            <div class="news-page-img">
                                <div class="icon-news">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                                <a href="http://bdskyanh.com/tin-tuc/khan-hang-nguon-cung-moi-chuyen-gia-lo-ngai-bds-tphcm-tang-gia.html">
                                    <img src="uploads/images/news/1543537947_khanhang.jpg" alt="Khan hàng nguồn cung mới, chuyên gia lo ngại BĐS Tp.HCM tăng giá">
                                </a>
                            </div>

                            <h4><a href="http://bdskyanh.com/tin-tuc/khan-hang-nguon-cung-moi-chuyen-gia-lo-ngai-bds-tphcm-tang-gia.html">Khan hàng nguồn cung mới, chuyên gia lo ngại BĐS Tp.HCM tăng giá</a></h4>
                            <h5><i class="fa fa-clock-o" aria-hidden="true"></i> 02/12/2018</h5>

                            <p>Nhiều dự báo đưa ra, khi nguồn cung hạn hẹp, nhu cầu thực còn lớn, những điều chỉnh về phát triển dự án mới… có thể là các nguyên nhân khiến giá BĐS Tp.HCM thiết lập mặt bằng giá mới trong thời gian tới.</p>

                            <div class="news-page-btn">
                                <a href="http://bdskyanh.com/tin-tuc/khan-hang-nguon-cung-moi-chuyen-gia-lo-ngai-bds-tphcm-tang-gia.html">Xem thêm <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                                    </div>

                                    </div>
    </section>

</article>
<script>
    var mySwiper = new Swiper('.swiper-project-2', {
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
        if ($thePane.find('.swiper-container').length > 0 && 0 === $thePane.find('.swiper-slide-active').length) {
            mySwiper[paneIndex].update();
        }
    });

</script>

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
                items: 3
            },
            1000: {
                items: 4
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
