<!DOCTYPE html>
<html class="no-js" lang="zxx" >


<!-- Mirrored from demo.graygrids.com/themes/shopgrids/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2024 10:11:53 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title') - </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo.png')}}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/LineIcons.3.0.css')}}" />
    <link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
    .important-content {
    visibility: hidden;
}

</style>
<body  ng-app="tcApp" ng-controller="tcCtrl" oncontextmenu="return false;">
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area position-sticky top-0 z-3">
        <!-- Start Topbar -->
        <!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-left">
                            <ul class="menu-top-link">
                                <li>
                                    <div class="select-position">
                                        <select id="select4">
                                            <option value="0" selected>$ USD</option>
                                            <option value="1">€ EURO</option>
                                            <option value="2">$ CAD</option>
                                            <option value="3">₹ INR</option>
                                            <option value="4">¥ CNY</option>
                                            <option value="5">৳ BDT</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="select-position">
                                        <select id="select5">
                                            <option value="0" selected>English</option>
                                            <option value="1">Español</option>
                                            <option value="2">Filipino</option>
                                            <option value="3">Français</option>
                                            <option value="4">العربية</option>
                                            <option value="5">हिन्दी</option>
                                            <option value="6">বাংলা</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-middle">
                            <ul class="useful-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-end">
                            <div class="user">
                                <i class="lni lni-user"></i>
                                Hello
                            </div>
                            <ul class="user-login">
                                <li>
                                    <a href="login.html">Sign In</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- End Topbar -->
        <!-- Start Header Middle -->
        <div  class="header-middle bg-success" >
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('images/logo.png')}}" class="img-fluid w-50" alt="Logo">
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-6 col-md-7 d-xs-none">
                        <!-- Start Main Menu Search -->
                        <div class="main-menu-search">
                            <!-- navbar search start -->
                            <div class="navbar-search search-style-5">
                                <div class="search-select bg-white">
                                    <div class="select-position">
                                        <select id="select1">
                                            <option class="form-control me-2" selected>SẢN PHẨM</option>
                                            <option value="máy lọc nước">máy lọc nước</option>
                                            <option value="Lõi lọc nước Phụ kiện máy lọc chính hãng">Lõi lọc nước  Phụ kiện máy lọc chính hãng</option>
                                            <option value="linh kiện máy lọc">linh kiện máy lọc</option>
                                            <option value="Sửa máy lọc nước">Sửa máy lọc nước</option>
                                        </select>
                                    </div>
                                </div>
                                <form class="d-flex" role="search" action="" method="GET">
                                    <input id="search-input" class="form-control" name="query" aria-label="Search" placeholder="Search">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </form>
                                
                            </div>
                            <!-- navbar search Ends -->
                        </div>
                        <!-- End Main Menu Search -->
                    </div>
                    
                    <div class="col-lg-3 col-md-2 col-5">
                        <div class="middle-right-area">
                            <div class="nav-hotline">
                                <i class="lni lni-phone bg-white"></i>
                                <h3 class="text-white">Hotline:
                                    <span class="text-white">0777 02 07 82</span>
                                </h3>
                            </div>
                            <div class="navbar-cart">
                                <div class="cart-items">
                                    <a href="javascript:void(0)" class="main-btn bg-white">
                                        <i class="lni lni-cart "></i>
                                        <span class="total-items"> </span>
                                    </a>
                                    <!-- Shopping Item -->
                                    <div class="shopping-item">
                                        <div class="dropdown-cart-header">
                                            <span> Sản Phẩm</span>
                                            <a href="">Xem Giỏ Hàng</a>
                                        </div>
                                        <ul class="shopping-list">
                                            <li ng-repeat="sp in cart">
                                                <a href="javascript:void(0)" ng-click="deleteFromCart($index)" class="remove" title="Remove this item"><i
                                                        class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="/productdetail/@{{sp.slug}}"><img
                                                            src="{{asset('/')}}images/@{{sp.image}}" alt="#"></a>
                                                </div>

                                                <div class="content">
                                                    <h4><a href="/productdetail/@{{sp.slug}}">
                                                        @{{sp.name}}</a></h4>
                                                    <p class="quantity">@{{sp.quantity}} x - <span class="amount">@{{sp.price|number}} VND</span></p>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                        <div class="bottom">
                                            <div class="total">
                                                <span>Total</span>
                                                <span class="total-amount">@{{ totalCartMoney() |number}} VND</span>
                                            </div>
                                            <div class="button">
                                                <a href="checkout.html" class="btn animate">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Shopping Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Header Bottom -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="nav-inner">
                        <!-- Start Mega Category Menu -->
                        <div class="mega-category-menu">
                            <span class="cat-button"><i class="lni lni-menu"></i>DANH MỤC</span>
                            <ul class="sub-category">
                                    <li class="nav-item"><a href="">dfghdfgh</a></li>
                                
                            </ul>
                        </div>
                        <!-- End Mega Category Menu -->
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{route('home')}}" class="active" aria-label="Toggle navigation">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" aria-label="Toggle navigation">Tin tức</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" aria-label="Toggle navigation">Giới thiệu</a>

                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Liên hệ</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="about-us.html"><i
                                                        class="bi bi-telephone-fill"></i> 0777 02 07 82</a></li>
                                            <li class="nav-item"><a href="faq.html"><i class="bi bi-facebook"></i>
                                                    Facebook</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href=""
                                            >Cửa Hàng</a>
                                    </li>
                                    
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Start Nav Social -->
                     
                    <div class="nav-social">
                                        
</div>
                    <!-- End Nav Social -->
                </div>
            </div>
        </div>
        <!-- End Header Bottom -->
    </header>
    <!-- End Header Area -->

    @if (Route::currentRouteName()!='home')
        <!-- Start Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">@yield('title')</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                            <li><a href="index.html">@yield('title1')</a></li>
                            <li>@yield('title')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->
    @endif
    
    <div ng-controller="viewCtrl">
        @yield('body')
    </div>
    <!-- Start Footer Area -->
    <footer class="footer mt-5 bg-success">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="{{asset('images/logo.png')}}" alt="#">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="footer-newsletter">
                                <h4 class="title">
                                    CÔNG TY TNHH TM XNK HOÀNG PHÚ

                                   
                                    <span> MR. THANH – Quản lý kỹ thuật.</span>
                                </h4>
                                <div class="newsletter-form-head">
                                    <form action="#" method="get" target="_blank" class="newsletter-form">
                                        <input name="EMAIL" placeholder="Email address here..." type="email">
                                        <div class="button">
                                            <button class="btn">Subscribe<span class="dir-part"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <!-- Start Footer Middle -->
        <div class="footer-middle">
            <div class="container">
                <div class="bottom-inner">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Single Widget -->
                            <div class="single-footer f-contact">
                                <h3>THÔNG TIN LIÊN HỆ</h3>
                                <p class="phone">Phone: 0777 02 07 82</p>
                                <ul>
                                    <li><span>Trụ sở chính: </span> Lê Thị Riêng, P. Thới An, Q. 12, TP. Hồ Chí Minh</li>
                                    <li><span>Giờ làm việc : </span> Các khung giờ hành chính</li>
                                </ul>
                                <p class="mail">
                                    <a href="mailto:support@shopgrids.com">support@shopgrids.com</a>
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        
                        <div class="col-lg-4">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Liên kết nhanh</h3>
                                <ul>
                                  <li> <a href="{{route('home')}}">Trang Chủ</a></li>
                                  <li> <a href="">Tin Tức</a></li>
                                  <li> <a href="">Giới Thiệu</a></li>
                                  <li> <a href="#">Liên Hệ</a></li>
                                  <li> <a href="">Mua Hàng</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
        <!-- Start Footer Bottom -->
       
        <!-- End Footer Bottom -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
            <a href="tel:0988333069" class="pps-btn-img">
                <img src="https://nocodebuilding.com/wp-content/uploads/2020/07/icon-call-nh.png" alt="Gọi điện thoại" width="50">
            </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:0777020782">
                <span class="text-hotline">0777020782</span>
            </a>
        </div>
    </div>
    <style>

    .hotline-phone-ring-wrap {
      position: fixed;
      bottom: 0;
      left: -50px;
      z-index: 999999;  
    }
    .hotline-phone-ring {
      position: relative;
      visibility: visible;
      background-color: transparent;
      width: 110px;
      height: 110px;
      cursor: pointer;
      z-index: 11;
      -webkit-backface-visibility: hidden;
      -webkit-transform: translateZ(0);
      transition: visibility .5s;
      left: 0;
      bottom: 0;
      display: block;
    }
    .hotline-phone-ring-circle {
        width: 85px;
      height: 85px;
      top: 10px;
      left: 10px;
      position: absolute;
      background-color: transparent;
      border-radius: 100%;
      border: 2px solid #e60808;
      -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
      animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
      transition: all .5s;
      -webkit-transform-origin: 50% 50%;
      -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
      opacity: 0.5;
    }
    .hotline-phone-ring-circle-fill {
        width: 55px;
      height: 55px;
      top: 25px;
      left: 25px;
      position: absolute;
      background-color: rgba(230, 8, 8, 0.7);
      border-radius: 100%;
      border: 2px solid transparent;
      -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
      animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
      transition: all .5s;
      -webkit-transform-origin: 50% 50%;
      -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
    }
    .hotline-phone-ring-img-circle {
        background-color: #e60808;
        width: 33px;
      height: 33px;
      top: 37px;
      left: 37px;
      position: absolute;
      background-size: 20px;
      border-radius: 100%;
      border: 2px solid transparent;
      -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
      animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
      -webkit-transform-origin: 50% 50%;
      -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .hotline-phone-ring-img-circle .pps-btn-img {
        display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }
    .hotline-phone-ring-img-circle .pps-btn-img img {
        width: 20px;
        height: 20px;
    }
    .hotline-bar {
      position: absolute;
      background: rgba(230, 8, 8, 0.75);
      height: 40px;
      width: 180px;
      line-height: 40px;
      border-radius: 3px;
      padding: 0 10px;
      background-size: 100%;
      cursor: pointer;
      transition: all 0.8s;
      -webkit-transition: all 0.8s;
      z-index: 9;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
      border-radius: 50px !important;
      /* width: 175px !important; */
      left: 33px;
      bottom: 37px;
    }
    .hotline-bar > a {
      color: #fff;
      text-decoration: none;
      font-size: 15px;
      font-weight: bold;
      text-indent: 30px;
      display: block;
      letter-spacing: 1px;
      line-height: 40px;
      font-family: Arial;
      /* right: 50px; */
    }
    .hotline-bar > a:hover,
    .hotline-bar > a:active {
      color: #fff;
    }
    @-webkit-keyframes phonering-alo-circle-anim {
      0% {
        -webkit-transform: rotate(0) scale(0.5) skew(1deg);
        -webkit-opacity: 0.1;
      }
      30% {
        -webkit-transform: rotate(0) scale(0.7) skew(1deg);
        -webkit-opacity: 0.5;
      }
      100% {
        -webkit-transform: rotate(0) scale(1) skew(1deg);
        -webkit-opacity: 0.1;
      }
    }
    @-webkit-keyframes phonering-alo-circle-fill-anim {
      0% {
        -webkit-transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.6;
      }
      50% {
        -webkit-transform: rotate(0) scale(1) skew(1deg);
        opacity: 0.6;
      }
      100% {
        -webkit-transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.6;
      }
    }
    @-webkit-keyframes phonering-alo-circle-img-anim {
      0% {
        -webkit-transform: rotate(0) scale(1) skew(1deg);
      }
      10% {
        -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
      }
      20% {
        -webkit-transform: rotate(25deg) scale(1) skew(1deg);
      }
      30% {
        -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
      }
      40% {
        -webkit-transform: rotate(25deg) scale(1) skew(1deg);
      }
      50% {
        -webkit-transform: rotate(0) scale(1) skew(1deg);
      }
      100% {
        -webkit-transform: rotate(0) scale(1) skew(1deg);
      }
    }
    @media (max-width: 768px) {
      .hotline-bar {
        display: none;
      }
    }
    </style>
    <div class="social-button">
        <div class="social-button-content">
           
            <a href="http://zalo.me/0777020782" target="_blank" class="zalo">
               <img src="https://nocodebuilding.com/wp-content/uploads/2020/07/zl.png" alt="Chat Zalo">
              </a>
        </div>
           
    </div>
    
      <style>
        .social-button{
            display: inline-grid;
            position: fixed;
            background-color:rgba(255,255,255,0) !important;
            bottom: 15px;
            right: 90px;
            min-width: 45px;
            text-align: center;
            z-index: 99999;
        }
        .social-button-content{
          display: inline-grid;   
        }
        .social-button a {padding:8px 0;cursor: pointer;position: relative;}
        .social-button i{
          width: 40px;
            height: 40px;
            background: #F05A5E;
            color: #fff;
            border-radius: 100%;
            font-size: 20px;
            text-align: center;
            line-height: 1.9;
            position: relative;
            z-index: 999;
        }
        .social-button span{
          display: none;
        }
        
        .mes:hover > span, .zalo:hover > span{display: block}
        .social-button a span {
            border-radius: 2px;
            text-align: center;
            background: #ffffff;
            padding: 9px;
            display: none;
            width: 180px;
            margin-right: 10px;
            position: absolute;
            color: #ffffff;
            z-index: 999;
            top: 9px;
            right: 20px;
        }
      </style>
    <!-- ========================= JS here ========================= -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/angular.min.js')}}"></script>
    <script src="{{asset('js/apiprovince.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/tiny-slider.js')}}"></script>
    <script src="{{asset('js/glightbox.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });

    </script>
    <script>
        document.addEventListener('contextmenu', function(e) {
     e.preventDefault();
        });
    </script>
    <script>
        document.getElementById('select1').onchange = function() {
            var selectedOption = this.value; // Lấy giá trị của option đã chọn
            document.getElementById('search-input').value = selectedOption; // Gán giá trị vào ô input
        };
    </script>
    
    <script>
        $(document).ready(function() {
            // Hiển thị thông báo "Đăng nhập đi" và đặt vị trí của nó ngay cạnh con trỏ
            $('#loginMessage').on('mouseenter', function() {
                $(this).css('cursor', 'help'); // Đổi con trỏ thành help khi hover
            });
            $('#loginMessage').on('mouseleave', function() {
                $(this).css('cursor', ''); // Trả lại con trỏ mặc định khi không hover
            });
    
            $(document).on('mousemove', function(e) {
                $('#loginMessage').css({
                    top: e.pageY + 10,
                    left: e.pageX + 10
                }).fadeIn('slow');
            }).on('mouseleave', function() {
                $('#loginMessage').hide();
            });
        });
    </script>
    <script>
        const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

        const timer = () => {
            const now = new Date().getTime();
            let diff = finaleDate - now;
            if (diff < 0) {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.container').style.display = 'none';
            }

            let days = Math.floor(diff / (1000 * 60 * 60 * 24));
            let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
            let seconds = Math.floor(diff % (1000 * 60) / 1000);

            days <= 99 ? days = `0${days}` : days;
            days <= 9 ? days = `00${days}` : days;
            hours <= 9 ? hours = `0${hours}` : hours;
            minutes <= 9 ? minutes = `0${minutes}` : minutes;
            seconds <= 9 ? seconds = `0${seconds}` : seconds;

            document.querySelector('#days').textContent = days;
            document.querySelector('#hours').textContent = hours;
            document.querySelector('#minutes').textContent = minutes;
            document.querySelector('#seconds').textContent = seconds;

        }
        timer();
        setInterval(timer, 1000);
    </script>
    <script>
        window.addEventListener('beforeunload', function (e) {
    // Gọi API logout
        axios.post('/logout')
         .then(response => {
             console.log('Đã đăng xuất tự động');
         })
         .catch(error => {
             console.error('Lỗi đăng xuất tự động:', error);
         });
    }); 
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</body>

</html>