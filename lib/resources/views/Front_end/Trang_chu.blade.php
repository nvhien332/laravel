
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
    

<!--     <section class="search">
    <div class="container">
        <div class="row">
            <form method="GET" action="/tim-kiem.html">
                <div class="col-md-6 col-sm-6 col-xs-6 search-form">
                    <input class="form-control" name="key-search" type="text" placeholder="Nhập từ khóa">
                </div> 
                <div class="col-md-5 col-sm-4 col-xs-6 search-form">
                    <select name="bds" id="" class="form-control" required="required">
                        <option>Loại BĐS</option>
                                                    <option value="1">Dự án</option>
                                                    <option value="2">Cho thuê</option>
                                            </select>
                </div> 
                <div class="col-md-1 col-sm-2">
                    <button type="submit">Tìm kiếm</button>
                </div>
            </form>

        </div>
    </div>
</section>
 -->
<!---------------------------------------- bố cục đầu -------------------------------------------------------->

    <section class="news-home">

        <div class="container">

            <div class="row">
                
                    <div class="col-md-6">

                        <div class="news-text wow bounceInRight">

                            <div class="title-category"><h1>BĐS CẦN BÁN NHANH</h1></div>
                                <!-- khúc đầu --->
                               @foreach($featured as $item) 
                                <div class="box-news-text">
                                    <div class="row">

                                        <div class="col-xs-5">

                                            <div class="news-text-img">

                                                <div class="icon-news">

                                                    <i class="fa fa-play" aria-hidden="true"></i>

                                                </div>

                                                <div class="news-link">

                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>

                                                </div>

                                                <a href="#"><img src="{{asset('lib/storage/app/avata/'.$item->prod_img)}}" alt="đất 1A đối diện cổng chào xã Kỳ Thọ"></a>

                                            </div>

                                        </div>

                                        <div class="col-xs-7">

                                            <div class="noibat-desc">
                                                <h4><a href="{{asset('details/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">{{$item->prod_name}}</a></h4>
                                                <span>{{number_format($item->prod_price,0,',','.')}} TRIỆU </span><br> 
                                                <span>Khuyến mãi : giảm {{$item->prod_promotion}} </span>
                                                <p>Vị trí: đối diện cây xăng Sơn Hiền, xã Kỳ Thọ, huyện Kỳ Anh</p>

                                                <p>Diện tích: 280m2</p>

                                              

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            @endforeach
                        </div>
                    </div>

                                             <!-------------------------------------->
				
                    <div class="col-md-6">

                        <div class="news-video wow bounceInLeft">

                            <div class="title-category">

                                <h1>TIN TỨC VIDEO</h1>

                            </div>

                            <div class="box-video">

                                
                                    <iframe class="videoarea"  src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                                    <ul class="playlist" >

                                        
                                            <li class="video-box" movieurl="https://www.youtube.com/embed/21uLQrPr-44">

                                                <img src="https://i.ytimg.com/vi/21uLQrPr-44/maxresdefault.jpg" alt="GIỚI THIỆU DỰ ÁN KHU DÂN CƯ PHÚ NHÂN NGHĨA">

                                                <a>GIỚI THIỆU DỰ ÁN KHU DÂN CƯ PHÚ NHÂN NGHĨA </a>

                                            </li>

                                        
                                            <li class="video-box" movieurl="https://www.youtube.com/embed/ykW6ZKecjtg">

                                                <img src="https://i.ytimg.com/vi/ykW6ZKecjtg/maxresdefault.jpg" alt="Đầu tư bất động sản với giá 1 tỷ - Những đòn bẩy tài chính">

                                                <a>Đầu tư bất động sản với giá 1 tỷ - Những đòn bẩy tài chính </a>

                                            </li>

                                        
                                            <li class="video-box" movieurl="https://www.youtube.com/embed/qbFwNvq9xhE">

                                                <img src="https://i.ytimg.com/vi/qbFwNvq9xhE/maxresdefault.jpg" alt="Ba bước căn bản bán hàng bất động sản đất nền">

                                                <a>Ba bước căn bản bán hàng bất động sản đất nền </a>

                                            </li>

                                        
                                            <li class="video-box" movieurl="https://www.youtube.com/embed/0ji5T21m7zE">

                                                <img src="https://i.ytimg.com/vi/0ji5T21m7zE/maxresdefault.jpg" alt="BÍ QUYẾT Đầu tư bất động sản với 1 tỷ đồng">

                                                <a>BÍ QUYẾT Đầu tư bất động sản với 1 tỷ đồng </a>

                                            </li>

                                        
                                            <li class="video-box" movieurl="https://www.youtube.com/embed/DzwIBxWR3Oc">

                                                <img src="https://i.ytimg.com/vi/DzwIBxWR3Oc/maxresdefault.jpg" alt="Bí Quyết Kinh Doanh Và Đầu Tư Bất Động Sản">

                                                <a>Bí Quyết Kinh Doanh Và Đầu Tư Bất Động Sản </a>

                                            </li>

                                        
                                            <li class="video-box" movieurl="https://www.youtube.com/embed/EHLGBwFUnvE">

                                                <img src="https://i.ytimg.com/vi/EHLGBwFUnvE/maxresdefault.jpg" alt="Đầu tư Bất động sản với 1 tỷ đồng - Những vấn đề pháp lý">

                                                <a>Đầu tư Bất động sản với 1 tỷ đồng - Những vấn đề pháp lý </a>

                                            </li>

                                        
                                    </ul>
                                
                            </div>

                        </div>

                    </div>

            </div>
        </div>
    </section>

     <!-----------------------------=-==========XONG BỐ CỤC ĐẦU ===========----------------------------------->    
        <section class="project-home wow slideInUp">

            <div class="container">
     <!--- ĐOẠN ĐẦU TRONG BỐ CỤC 2-->
                <div class="row">
                    <div class="col-xs-5">
                        <div class="title-category">
                            <h1>Dự án nổi bật</h1>
                        </div>
                    </div>

                    <div class="col-xs-7">
                        
                    </div>
                </div>
           <!------------------------------BO CUC THU 2 TRONG DOAN 2---------------------->
                    <div class="owl-carousel projectHome-carousel owl-theme">

                        
                            <div class="item">
                                <div class="box-project">
                                    <div class="box-project-img">
                                        <img src="uploads/images/news/1563808914_cover21562649715136.jpg" alt="KHU ĐÔ THỊ PHÚ NHÂN NGHĨA - PHỐ ĐẸP NGƯỜI ĐÔNG - CỘNG ĐỒNG THỊNH VƯỢNG" />
                                    </div>

                                    <div class="box-project-detail">
                                        <h5><a href="http://bdskyanh.com/tin-tuc/khu-do-thi-phu-nhan-nghia-pho-dep-nguoi-dong-cong-dong-thinh-vuong.html">KHU ĐÔ THỊ PHÚ NHÂN NGHĨA - PHỐ ĐẸP NGƯỜI ĐÔNG - CỘNG ĐỒNG THỊNH VƯỢNG</a></h5>
                                    </div>
                                </div>
                            </div>
 
                        
                            <div class="item">
                                <div class="box-project">
                                    <div class="box-project-img">
                                        <img src="uploads/images/news/1546831055_31.jpg" alt="Đẩy nhanh tiến độ xây dựng Trung tâm thương mại Phú Nhân Nghĩa" />
                                    </div>

                                    <div class="box-project-detail">
                                        <h5><a href="http://bdskyanh.com/tin-tuc/day-nhanh-tien-do-xay-dung-trung-tam-thuong-mai-phu-nhan-nghia.html">Đẩy nhanh tiến độ xây dựng Trung tâm thương mại Phú Nhân Nghĩa</a></h5>
                                    </div>
                                </div>
                            </div>

                        
                            <div class="item">
                                <div class="box-project">
                                    <div class="box-project-img">
                                        <img src="uploads/images/news/1544348710_khachhang5.jpg" alt="Hơn 800 khách hàng tham dự “Lễ ra mắt và tri ân khách hàng dự án PNN Complex”" />
                                    </div>

                                    <div class="box-project-detail">
                                        <h5><a href="/tin-tuc/hon-800-khach-hang-tham-du-le-ra-mat-va-tri-an-khach-hang-du-an-pnn-complex.html">Hơn 800 khách hàng tham dự “Lễ ra mắt và tri ân khách hàng dự án PNN Complex”</a></h5>
                                    </div>
                                </div>
                            </div>

                        
                            <div class="item">
                                <div class="box-project">
                                    <div class="box-project-img">
                                        <img src="uploads/images/news/1543759305_legtduan.jpg" alt="Thị trường bất động sản Kỳ Anh: Đón thêm 1 dự án mới" />
                                    </div>

                                    <div class="box-project-detail">
                                        <h5><a href="http://bdskyanh.com/tin-tuc/thi-truong-bat-dong-san-ky-anh-don-them-1-du-an-moi.html">Thị trường bất động sản Kỳ Anh: Đón thêm 1 dự án mới</a></h5>
                                    </div>
                                </div>
                            </div>

                        
                            <div class="item">
                                <div class="box-project">
                                    <div class="box-project-img">
                                        <img src="uploads/images/news/1543763989_pnnduong34.jpg" alt="PNN Complex - Cộng đồng dân cư thịnh vượng" />
                                    </div>

                                    <div class="box-project-detail">
                                        <h5><a href="http://bdskyanh.com/tin-tuc/pnn-complex-cong-dong-dan-cu-thinh-vuong.html">PNN Complex - Cộng đồng dân cư thịnh vượng</a></h5>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>
        </section>
                       <!------------------- BỐ CỤC THỨ 3 ------------------------------------->
    <!--- Bố cục 3, đoạn đầu ---------->
        <section class="ban-home wow slideInUp">
            <div class="container">
                <div class="row">

                    <div class="col-xs-5 col-sm-3">
                        <div class="title-category">
                            <h1>Dự án </h1>
                        </div>
                    </div>

                    <div class="col-xs-7 col-sm-9">
                        <div class="all-ban text-right">
						
                            <a href="http://localhost/laravel-5.3/Du_an_NhaDat">Xem tất cả</a>
                        </div>

                        <div class="button-swiper">
                            <div class="swiper-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                            <div class="swiper-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                    </div>

                </div>
   <!------ Bố cục 3, đoạn 2-->
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="swiper-container swiper-ban">
                                <div class="swiper-wrapper">

                                        <div class="swiper-slide box-ban">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="ban-img">
                                                        <a href="/chi-tiet-du-an/ban-nhanh-lo-dat-mat-tien-1a-gan-ngay-cong-chao-xa-ky-tho-da-ban-xong.html">
                                                            <img src="uploads/images/product/1563807343_62143574_504413687031138_8067791642549026816_n.jpg " style="width: 60%" >
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="ban-name">
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/ban-nhanh-lo-dat-mat-tien-1a-gan-ngay-cong-chao-xa-ky-tho-da-ban-xong.html">bán nhanh lô đất mặt tiền 1A, gần ngay cổng chào xã Kỳ Thọ( đã bán xong)</a></h4>
                                                    </div>
                                                    <div class="ban-desc">
                                                        <p>Vị trí: thôn Tân Thọ, xã Kỳ Thọ, huyện Kỳ Anh, tĩnh Hà Tĩnh</p>
                                                        <p>Diện tích: 365m2</p>
                                                        <p>Giá: 1 tỷ 300tr</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="swiper-slide box-ban">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="ban-img">
                                                        <a href="/chi-tiet-du-an/ban-dat-nha-quan-bia-86-vang-do-den-sat-nga-ba-xa-ky-hai.html">
                                                            <img src="uploads/images/product/1563805548_67494895_914824392201551_834404994768699392_n11.jpg" alt="bán đất + nhà quán bia 86 ( vàng đỏ đen) sát ngã ba xã Kỳ Hải">

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="ban-name">
                                                      <h4><a href="http://bdskyanh.com/chi-tiet-du-an/ban-dat-nha-quan-bia-86-vang-do-den-sat-nga-ba-xa-ky-hai.html">bán đất + nhà quán bia 86 ( vàng đỏ đen) sát ngã ba xã Kỳ Hải</a></h4>
                                                    </div>

                                                    <div class="ban-desc">
                                                        <p>Vị trí: trục đường Nguễn Thị Bích CHâu</p>
                                                        <p>Diện tích: 400m2</p>
                                                        <p>Giá: 1 tỷ 700tr</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="swiper-slide box-ban">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="ban-img">
                                                        <a href="/chi-tiet-du-an/dat-kinh-doanh-mat-tien-bich-chau.html">
                                                            <img src="uploads/images/product/1554646770_56448960_2100138316733094_2395612258106343424_n1.jpg" alt="Đất kinh doanh mặt tiền bích châu">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="ban-name">
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/dat-kinh-doanh-mat-tien-bich-chau.html">Đất kinh doanh mặt tiền bích châu</a></h4>
                                                    </div>

                                                    <div class="ban-desc">
                                                        <p>Vị trí: </p>
                                                        <p>Diện tích: 200m2</p>
                                                        <p>Giá: 700tr</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="swiper-slide box-ban">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="ban-img">
                                                        <a href="/chi-tiet-du-an/dat-kinh-doanh-cach-1a-100m-sau-mam-non-hoa-trang-nguyen.html">
                                                            <img src="uploads/images/product/1554644092_55949092_443842293021448_5929362507163500544_n1.jpg" alt="Đất Kinh Doanh cách 1A 100m sau mầm non Hoa Trạng Nguyên">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="ban-name">
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/dat-kinh-doanh-cach-1a-100m-sau-mam-non-hoa-trang-nguyen.html">Đất Kinh Doanh cách 1A 100m sau mầm non Hoa Trạng Nguyên</a></h4>
                                                    </div>
                                                    <div class="ban-desc">
                                                        <p>Vị trí: Phường Sông trí, thị xã Kỳ Anh, cách quốc lộ 1A 100m, cách vincom 200m</p>
                                                        <p>Diện tích: 147m2</p>
                                                        <p>Giá: 770tr</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="swiper-slide box-ban">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="ban-img">
                                                        <a href="/chi-tiet-du-an/dat-2-mat-tien-sau-mam-non-hoa-trang-nguyen.html">
                                                            <img src="uploads/images/product/1554302417_55949092_443842293021448_5929362507163500544_n1.jpg" alt="Đất 2 mặt tiền sau mầm non Hoa Trạng Nguyên">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="ban-name">
                                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/dat-2-mat-tien-sau-mam-non-hoa-trang-nguyen.html">Đất 2 mặt tiền sau mầm non Hoa Trạng Nguyên</a></h4>
                                                    </div>

                                                    <div class="ban-desc">
                                                        <p>Vị trí: Phường Sông trí, thị xã Kỳ Anh</p>
                                                        <p>Diện tích: 147m2</p>
                                                        <p>Giá: 1,05 tỷ</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="swiper-slide box-ban">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="ban-img">
                                                        <a href="/chi-tiet-du-an/dat-1a-doi-dien-cong-chao-xa-ky-tho.html">
                                                            <img src="uploads/images/product/1554300482_55945004_395066481274448_3205472390951731200_n11.jpg" alt="đất 1A đối diện cổng chào xã Kỳ Thọ">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="ban-name">
                                                        <h4><a href="/chi-tiet-du-an/dat-1a-doi-dien-cong-chao-xa-ky-tho.html">đất 1A đối diện cổng chào xã Kỳ Thọ</a></h4>
                                                    </div>
                                                    <div class="ban-desc">
                                                        <p>Vị trí: đối diện cây xăng Sơn Hiền, xã Kỳ Thọ, huyện Kỳ Anh</p>
                                                        <p>Diện tích: 280m2</p>
                                                        <p>Giá: 980tr</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="swiper-slide box-ban">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="ban-img">
                                                        <a href="/chi-tiet-du-an/dat-biet-thu-mat-tien-15m.html">
                                                            <img src="uploads/images/product/1548726317_50937081_291127404862790_2945519821778845696_n1.jpg" alt="Đất biệt thự mặt tiền 15m">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="ban-name">
                                                        <h4><a href="/chi-tiet-du-an/dat-biet-thu-mat-tien-15m.html">Đất biệt thự mặt tiền 15m</a></h4>
                                                    </div>
                                                    <div class="ban-desc">
                                                        <p>Vị trí: PNN Complex</p>
                                                        <p>Diện tích: 375m2</p>
                                                        <p>Giá: 800Tr</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="swiper-slide box-ban">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="ban-img">
                                                        <a href="/chi-tiet-du-an/dat-biet-thu-mat-tien-15m.html">
                                                            <img src="uploads/images/product/1548726317_50937081_291127404862790_2945519821778845696_n1.jpg" alt="Đất biệt thự mặt tiền 15m">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="ban-name">
                                                        <h4><a href="/chi-tiet-du-an/dat-biet-thu-mat-tien-15m.html">Đất biệt thự mặt tiền 15m</a></h4>
                                                    </div>
                                                    <div class="ban-desc">
                                                        <p>Vị trí: PNN Complex</p>
                                                        <p>Diện tích: 375m2</p>
                                                        <p>Giá: 800Tr</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="swiper-slide box-ban">

                                            <div class="row">

                                                <div class="col-xs-6">

                                                    <div class="ban-img">

                                                        <a href="/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html">

                                                            <img src="uploads/images/product/1548150242_l10_da_sua.jpg" alt="Chỉ còn 1 lô góc vào trung tâm thương mại PNN COMPLEX">

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="col-xs-6">

                                                    <div class="ban-name">

                                                        <h4><a href="/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html">Chỉ còn 1 lô góc vào trung tâm thương mại PNN COMPLEX</a></h4>

                                                    </div>

                                                    <div class="ban-desc">

                                                        <p>Vị trí: PNN Complex</p>

                                                        <p>Diện tích: </p>

                                                        <p>Giá: 1,76 tỷ</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    
                                        <div class="swiper-slide box-ban">

                                            <div class="row">

                                                <div class="col-xs-6">

                                                    <div class="ban-img">

                                                        <a href="/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html">

                                                            <img src="uploads/images/product/1548150242_l10_da_sua.jpg" alt="Chỉ còn 1 lô góc vào trung tâm thương mại PNN COMPLEX">

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="col-xs-6">

                                                    <div class="ban-name">

                                                        <h4><a href="/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html">Chỉ còn 1 lô góc vào trung tâm thương mại PNN COMPLEX</a></h4>

                                                    </div>

                                                    <div class="ban-desc">

                                                        <p>Vị trí: PNN Complex</p>

                                                        <p>Diện tích: </p>

                                                        <p>Giá: 1,76 tỷ</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    
                                        <div class="swiper-slide box-ban">

                                            <div class="row">

                                                <div class="col-xs-6">

                                                    <div class="ban-img">

                                                        <a href="/chi-tiet-du-an/dat-nen-biet-thu-lo-goc-2-mat-tien.html">

                                                            <img src="uploads/images/product/1543660245_dji_0068.jpg" alt="Đất nền biệt thự lô góc 2 mặt tiền">

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="col-xs-6">

                                                    <div class="ban-name">

                                                        <h4><a href="/chi-tiet-du-an/dat-nen-biet-thu-lo-goc-2-mat-tien.html">Đất nền biệt thự lô góc 2 mặt tiền</a></h4>

                                                    </div>

                                                    <div class="ban-desc">

                                                        <p>Vị trí: PNN Complex</p>

                                                        <p>Diện tích: 416m2</p>

                                                        <p>Giá: 1,96 tỷ</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    
                                        <div class="swiper-slide box-ban">

                                            <div class="row">

                                                <div class="col-xs-6">

                                                    <div class="ban-img">

                                                        <a href="/chi-tiet-du-an/ban-nhanh-lo-dat-doi-dien-tttm-phu-nhan-nghia.html">

                                                            <img src="uploads/images/product/1543660453_dji_0020.jpg" alt="Bán nhanh lô đất đối diện TTTM Phú Nhân Nghĩa">

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="col-xs-6">

                                                    <div class="ban-name">

                                                        <h4><a href="/chi-tiet-du-an/ban-nhanh-lo-dat-doi-dien-tttm-phu-nhan-nghia.html">Bán nhanh lô đất đối diện TTTM Phú Nhân Nghĩa</a></h4>

                                                    </div>

                                                    <div class="ban-desc">

                                                        <p>Vị trí: PNN Complex</p>

                                                        <p>Diện tích: 200m2</p>

                                                        <p>Giá: 1,72 tỷ</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    
                                        <div class="swiper-slide box-ban">

                                            <div class="row">

                                                <div class="col-xs-6">

                                                    <div class="ban-img">

                                                        <a href="/chi-tiet-du-an/ban-nhanh-lo-dat-doi-dien-tttm-phu-nhan-nghia.html">

                                                            <img src="uploads/images/product/1543660453_dji_0020.jpg" alt="Bán nhanh lô đất đối diện TTTM Phú Nhân Nghĩa">

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="col-xs-6">

                                                    <div class="ban-name">

                                                        <h4><a href="/chi-tiet-du-an/ban-nhanh-lo-dat-doi-dien-tttm-phu-nhan-nghia.html">Bán nhanh lô đất đối diện TTTM Phú Nhân Nghĩa</a></h4>

                                                    </div>

                                                    <div class="ban-desc">

                                                        <p>Vị trí: PNN Complex</p>

                                                        <p>Diện tích: 200m2</p>

                                                        <p>Giá: 1,72 tỷ</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    
                                        <div class="swiper-slide box-ban">

                                            <div class="row">

                                                <div class="col-xs-6">

                                                    <div class="ban-img">

                                                        <a href="/chi-tiet-du-an/ban-dat-khu-do-thi-hung-phu-thi-xa-ky-anh.html">

                                                            <img src="uploads/images/product/1543722293_hf8.jpg" alt="Bán đất khu đô thị Hưng Phú-Thị xã Kỳ Anh">

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="col-xs-6">

                                                    <div class="ban-name">

                                                        <h4><a href="/chi-tiet-du-an/ban-dat-khu-do-thi-hung-phu-thi-xa-ky-anh.html">Bán đất khu đô thị Hưng Phú-Thị xã Kỳ Anh</a></h4>

                                                    </div>

                                                    <div class="ban-desc">

                                                        <p>Vị trí: Sông Trí</p>

                                                        <p>Diện tích: 119m2</p>

                                                        <p>Giá: 1,18 tỷ</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    
                                        <div class="swiper-slide box-ban">

                                            <div class="row">

                                                <div class="col-xs-6">

                                                    <div class="ban-img">

                                                        <a href="/chi-tiet-du-an/ban-nha-pho-lien-ke-mat-tien-duong-ql12-viet-lao.html">

                                                            <img src="uploads/images/product/1543734172_hf24.jpg" alt="Bán nhà phố liền kề, mặt tiền đường QL12 Việt Lào">

                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="col-xs-6">

                                                    <div class="ban-name">

                                                        <h4><a href="/chi-tiet-du-an/ban-nha-pho-lien-ke-mat-tien-duong-ql12-viet-lao.html">Bán nhà phố liền kề, mặt tiền đường QL12 Việt Lào</a></h4>

                                                    </div>

                                                    <div class="ban-desc">

                                                        <p>Vị trí: Sông Trí</p>

                                                        <p>Diện tích: 123m2</p>

                                                        <p>Giá: 3 tỷ 50tr.</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="swiper-slide box-ban">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                   <div class="ban-img">
                                                        <a href="/chi-tiet-du-an/dat-nen-biet-thu-ky-anh.html">
                                                            <img src="uploads/images/product/1543734872_dji_0018.jpg" alt="Đất nền biệt thự Kỳ Anh">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="ban-name">
                                                        <h4><a href="/chi-tiet-du-an/dat-nen-biet-thu-ky-anh.html">Đất nền biệt thự Kỳ Anh</a></h4>
                                                    </div>

                                                    <div class="ban-desc">
                                                        <p>Vị trí: Kỳ Châu</p>
                                                        <p>Diện tích: 375m2</p>
                                                        <p>Giá: Chỉ từ 3,5tr/m2</p>
                                                    </div>

                                               </div>

                                            </div>
                                        </div>
                                  
                                </div>
                            </div>
                      </div>
                    </div>  
            </div>
        </section>

           <!-------------- BỐ CỤC THỨ 4------------------>
        <section class="cho-thue-home project-home wow flipInX">
            <div class="container">

                <div class="row">
                    <div class="col-xs-5  col-sm-3">
                        <div class="title-category">
                            <h1>Cho thuê </h1>
                        </div>
                    </div>

                    <div class="col-xs-7 col-sm-9">
                        <div class="all-project text-right">
							
                        </div>
                    </div>
                </div>

         <!-- Bố cục 4, đoạn 2-->
                    <div class="owl-carousel chothue-carousel owl-theme">

                            <div class="item">
                                <div class="box-chothue">
                                    <div class="box-chothue-img">
                                        <div class="custom-project">
                                            <a title="Phóng to" href="uploads/images/product/1548150242_l10_da_sua.jpg" data-fancybox data-caption="Chỉ còn 1 lô góc vào trung tâm thương mại PNN COMPLEX"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a title="Xem chi tiết" href="/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html">

                                                <i class="fa fa-exclamation" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                        <img src="uploads/images/product/1548150242_l10_da_sua.jpg" alt="" />
                                    </div>

                                    <div class="box-chothue-detail">

                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/chi-con-1-lo-goc-vao-trung-tam-thuong-mai-pnn-complex.html">Chỉ còn 1 lô góc vào trung tâm thương mại PNN COMPLEX</a></h4>
                                        <p>Vị trí: PNN Complex</p>
                                        <p>Diện tích: </p>
                                        <p>Giá: 1,76 tỷ</p>
                                    </div>
                                </div>
                            </div>

                        
                            <div class="item">
                                <div class="box-chothue">
                                    <div class="box-chothue-img">
                                        <div class="custom-project">

                                            <a title="Phóng to" href="uploads/images/product/1543737003_hf21.jpg" data-fancybox data-caption="Cho thuê mặt bằng kinh doanh ngay ngã 3 Việt Lào"><i class="fa fa-search-plus" aria-hidden="true"></i></a>

                                            <a title="Xem chi tiết" href="/chi-tiet-du-an/cho-thue-mat-bang-kinh-doanh-ngay-nga-3-viet-lao.html">

                                                <i class="fa fa-exclamation" aria-hidden="true"></i>

                                            </a>

                                        </div> <img src="uploads/images/product/1543737003_hf21.jpg" alt="" /></div>

                                    <div class="box-chothue-detail">
                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/cho-thue-mat-bang-kinh-doanh-ngay-nga-3-viet-lao.html">Cho thuê mặt bằng kinh doanh ngay ngã 3 Việt Lào</a></h4>
                                        <p>Vị trí: Phường Sông Trí</p>
                                        <p>Diện tích: 375m2</p>
                                        <p>Giá: 20tr</p>
                                    </div>
                                </div>
                            </div>

                        
                            <div class="item">
                                <div class="box-chothue">
                                    <div class="box-chothue-img">
                                        <div class="custom-project">
                                           <a title="Phóng to" href="uploads/images/product/1543737003_hf21.jpg" data-fancybox data-caption="Cho thuê mặt bằng kinh doanh ngay ngã 3 Việt Lào"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a title="Xem chi tiết" href="/chi-tiet-du-an/cho-thue-mat-bang-kinh-doanh-ngay-nga-3-viet-lao.html">
                                                <i class="fa fa-exclamation" aria-hidden="true"></i>
                                            </a>
                                        </div><img src="uploads/images/product/1543737003_hf21.jpg" alt="" /></div>

                                    <div class="box-chothue-detail">
                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/cho-thue-mat-bang-kinh-doanh-ngay-nga-3-viet-lao.html">Cho thuê mặt bằng kinh doanh ngay ngã 3 Việt Lào</a></h4>
                                        <p>Vị trí: Phường Sông Trí</p>
                                        <p>Diện tích: 375m2</p>
                                        <p>Giá: 20tr</p>
                                    </div>
                                </div>
                            </div>

                        
                            <div class="item">

                                <div class="box-chothue">

                                    <div class="box-chothue-img">

                                        <div class="custom-project">

                                            <a title="Phóng to" href="uploads/images/product/1543739762_tttm.jpg" data-fancybox data-caption="Cho thuê gian hàng kinh doanh trong TTTM Phú Nhân Nghĩa"><i class="fa fa-search-plus" aria-hidden="true"></i></a>

                                            <a title="Xem chi tiết" href="/chi-tiet-du-an/cho-thue-gian-hang-kinh-doanh-trong-tttm-phu-nhan-nghia.html">

                                                <i class="fa fa-exclamation" aria-hidden="true"></i>

                                            </a>

                                        </div><img src="uploads/images/product/1543739762_tttm.jpg" alt="" />    </div>

                                    <div class="box-chothue-detail">
                                        <h4><a href="/chi-tiet-du-an/cho-thue-gian-hang-kinh-doanh-trong-tttm-phu-nhan-nghia.html">Cho thuê gian hàng kinh doanh trong TTTM Phú Nhân Nghĩa</a></h4>
                                        <p>Vị trí: TTTM Phú Nhân Nghĩa.</p>
                                        <p>Diện tích: 30m2</p>
                                        <p>Giá: 12tr</p>
                                    </div>
                                </div>
                            </div>

                        
                            <div class="item">
                                <div class="box-chothue">
                                    <div class="box-chothue-img">
                                        <div class="custom-project">
                                            <a title="Phóng to" href="uploads/images/product/1543739762_tttm.jpg" data-fancybox data-caption="Cho thuê gian hàng kinh doanh trong TTTM Phú Nhân Nghĩa"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a title="Xem chi tiết" href="/chi-tiet-du-an/cho-thue-gian-hang-kinh-doanh-trong-tttm-phu-nhan-nghia.html">
                                                <i class="fa fa-exclamation" aria-hidden="true"></i>
                                            </a>
                                        </div> <img src="uploads/images/product/1543739762_tttm.jpg" alt="" />  </div>

                                    <div class="box-chothue-detail">
                                        <h4><a href="http://bdskyanh.com/chi-tiet-du-an/cho-thue-gian-hang-kinh-doanh-trong-tttm-phu-nhan-nghia.html">Cho thuê gian hàng kinh doanh trong TTTM Phú Nhân Nghĩa</a></h4>
                                        <p>Vị trí: TTTM Phú Nhân Nghĩa.</p>
                                        <p>Diện tích: 30m2</p>
                                        <p>Giá: 12tr</p>
                                    </div>
                                </div>
                            </div>
                 </div>
            </div>
        </section>
<!------------------>
    
    <section class="banner-home-1 hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow zoomInLeft">
                    <div class="box-banner">
                        <a href="http://localhost/laravel-5.3/"><img src="uploads/images/ads/1543590607_pnn810x300.jpg" alt="Banner 3"></a>
                    </div>
                </div>

                <div class="col-md-6 wow zoomInRight">
                    <div class="box-banner">
                        <a href="http://localhost/laravel-5.3/"><img src="uploads/images/ads/1543590880_banertruongmn.jpg" alt="Banner 4"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
<!------- BỐ CỤC 5 -------------------->
        <section class="project-home wow slideInUp">
            <div class="container">

                <div class="row">
                    <div class="col-xs-5">
                        <div class="title-category">
                            <h1>Tin tức mới</h1>
                        </div>
                    </div>

                    <div class="col-xs-7">
                        <div class="all-project text-right">
                           
                        </div>
                    </div>
                </div>
 <!-------------------------->
                    <div class="owl-carousel projectHome-carousel owl-theme">

                            <div class="item">
                                <div class="box-project">					
										<div class="box-project-img">
											<div class="custom-project">
												<a title="Xem chi tiết" href="http://bdskyanh.com/tin-tuc/5-bi-quyet-dau-tu-dat-nen-du-an-khong-bao-gio-loi-thoi.html"><i class="fa fa-exclamation" aria-hidden="true"></i></a>

											</div>
											<a title="Xem chi tiết" href="http://bdskyanh.com/tin-tuc/5-bi-quyet-dau-tu-dat-nen-du-an-khong-bao-gio-loi-thoi.html">
												<img src="uploads/images/news/1545382834_sohong.jpg" alt="5 bí quyết đầu tư đất nền dự án không bao giờ lỗi thời" />
											</a>
										</div>
									
                                    <div class="box-project-detail">

                                        <h5><a href="http://bdskyanh.com/tin-tuc/5-bi-quyet-dau-tu-dat-nen-du-an-khong-bao-gio-loi-thoi.html">5 bí quyết đầu tư đất nền dự án không bao giờ lỗi thời</a></h5>

                                    </div>

                                </div>

                            </div>

                        
                            <div class="item">

                                <div class="box-project">
									
										<div class="box-project-img">

											<div class="custom-project">
												<a title="Xem chi tiết" href="http://bdskyanh.com/tin-tuc/nhung-luu-y-khong-the-bo-qua-truoc-khi-dat-coc-mua-nha.html"><i class="fa fa-exclamation" aria-hidden="true"></i></a>

											</div>
											<a title="Xem chi tiết" href="http://bdskyanh.com/tin-tuc/nhung-luu-y-khong-the-bo-qua-truoc-khi-dat-coc-mua-nha.html">
												<img src="uploads/images/news/1545376989_datcocmuanha.jpg" alt="Những lưu ý không thể bỏ qua trước khi đặt cọc mua nhà" />
											</a>
										</div>
									
                                    <div class="box-project-detail">

                                        <h5><a href="http://bdskyanh.com/tin-tuc/nhung-luu-y-khong-the-bo-qua-truoc-khi-dat-coc-mua-nha.html">Những lưu ý không thể bỏ qua trước khi đặt cọc mua nhà</a></h5>

                                    </div>

                                </div>

                            </div>

                        
                            <div class="item">

                                <div class="box-project">
									
										<div class="box-project-img">

											<div class="custom-project">
												<a title="Xem chi tiết" href="http://bdskyanh.com/tin-tuc/lan-song-khach-ngoai-tinh-o-at-do-ve-ha-noi-mua-nha-ngay-cang-tang.html"><i class="fa fa-exclamation" aria-hidden="true"></i></a>

											</div>
											<a title="Xem chi tiết" href="http://bdskyanh.com/tin-tuc/lan-song-khach-ngoai-tinh-o-at-do-ve-ha-noi-mua-nha-ngay-cang-tang.html">
												<img src="uploads/images/news/1543538213_lansong.png" alt="“Làn sóng” khách ngoại tỉnh ồ ạt đổ về Hà Nội mua nhà ngày càng tăng" />
											</a>
										</div>
									
                                    <div class="box-project-detail">
                                        <h5><a href="http://bdskyanh.com/tin-tuc/lan-song-khach-ngoai-tinh-o-at-do-ve-ha-noi-mua-nha-ngay-cang-tang.html">“Làn sóng” khách ngoại tỉnh ồ ạt đổ về Hà Nội mua nhà ngày càng tăng</a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="item">

                                <div class="box-project">
									
										<div class="box-project-img">

											<div class="custom-project">
												<a title="Xem chi tiết" href="/tin-tuc/khan-hang-nguon-cung-moi-chuyen-gia-lo-ngai-bds-tphcm-tang-gia.html"><i class="fa fa-exclamation" aria-hidden="true"></i></a>

											</div>
											<a title="Xem chi tiết" href="/tin-tuc/khan-hang-nguon-cung-moi-chuyen-gia-lo-ngai-bds-tphcm-tang-gia.html">
												<img src="uploads/images/news/1543537947_khanhang.jpg" alt="Khan hàng nguồn cung mới, chuyên gia lo ngại BĐS Tp.HCM tăng giá" />
											</a>
										</div>
									
                                    <div class="box-project-detail">

                                        <h5><a href="/tin-tuc/khan-hang-nguon-cung-moi-chuyen-gia-lo-ngai-bds-tphcm-tang-gia.html">Khan hàng nguồn cung mới, chuyên gia lo ngại BĐS Tp.HCM tăng giá</a></h5>
                                    </div>
                                </div>
                            </div>
    
                    </div>
            </div>
        </section>

    

</article>
    <footer>
    <section class="footer-top wow slideInUp">
        <div class="container">
            <div class="row">

              

             
                

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
