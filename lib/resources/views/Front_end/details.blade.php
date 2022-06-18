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
  <!-------- cấu trúc cũa giao diện cho nó đẹp --->
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
            return fal
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

<!-------------------------------------------------------------------------------------------------->

    <a href="#" id="goTop" class="bd-circle t-center wow zoomInRight" data-wow-duration="2s"><i class="fa fa-location-arrow" aria-hidden="true"></i>
    </a>

    <article>

        <!-- tong anh--->
        <section class="slider"> 
            <div class="owl-carousel slider-carousel owl-theme">
                <div class="item">
                    <img src="uploads/images/ads/1543329524_z1189890930844_f51f2af2585d700d87c7ea16cec338f6.jpg" alt="Banner 3">
                </div>
                <div class="item">
                    <img src="uploads/images/ads/1543329519_z1189890870015_247a3d5a92390138a6a16d0cf18c24c3.jpg" alt="Banner 2">

                 </div>
                 <div class="item">
                        <img src="uploads/images/ads/1543466615_tttm_1.jpg" alt="Banner 1">
                 </div>

            </div> 
        </section>
      
	

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">
				

					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div><br>
							<h2 style="color: #3239C9">{{$item->prod_name}}</h2><br>

							<div class="row">

								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img src="{{asset('lib/storage/app/avata/'.$item->prod_img)}}" alt="đất 1A đối diện cổng chào xã Kỳ Thọ"></a>
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá : {{number_format($item->prod_price,0,',','.')}} TRIỆU</p>
									<p>Khuyến mãi : {{$item->prod_promotion}}</p>
									
								
									<p>Tình trạng : {{$item->prod_condition}}</p>
									

									<p>Danh mục :  @if($item->prod_cate==1) biệt thự    @else nhà đất  @endif</p>

									
									<h3>Trạng thái lô đất đang cập nhật : @if($item->prod_status==1) chưa bán  @else đã bán  @endif</h3>
								</div>
							</div>							
						</div><br>


						<!-- <div id="product-detail">
							<h3>Chi tiết khu đất </h3>
							{!!$item->prod_description!!}.
						</div><br>
					</div> -->
					 <div class="row list-product">
					 	<div class="col-md-12">
					 		<h2 style="color: #4B22C2"> Chi tiết sản phẩm</h2>
					 		<p class="text-justify">{!!$item->prod_description!!}</p>
					 	</div>

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

</body>
</html>