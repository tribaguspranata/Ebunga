<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $pageTitle }} - Ebunga.co.id</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/img-utility/fav.png"/>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('ladun/account_asset/css/vendor/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('ladun/account_asset/css/vendor/ionicons.min.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css"> -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('ladun/account_asset/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/account_asset/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/account_asset/css/plugins/jqueryui.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/account_asset/cropper/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/account_asset/cropper/css/style-example.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/account_asset/cropper/css/jquery.Jcrop.css') }}"/>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
    <!-- <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/jqueryui.min.css"> -->
    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <!-- <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/components.css"> -->
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('ladun/account_asset/css/style.css') }}">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/components.css">

    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

</head>

<body>

    <div class="main-wrapper">

        <header class="fl-header">

            <!-- Header Top Start -->
            <div class="header-top-area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-top-inner">
                                <div class="row">
                                    <div class="col-lg-4 col-md-3">
                                        <div class="social-top">
                                            <ul>
                                                <li><a href="https://www.facebook.com"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="https://twitter.com"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="https://www.instagram.com"><i class="ion-social-instagram"></i></a></li>
                                                <li><a href="https://youtube.com/"><i class="ion-social-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-9">
                                        <div class="top-info-wrap text-right">
                                            <ul class="top-info">
                                                <li>Mon - Sat : 9am to 5pm </li>
                                                <li><a href="https://api.whatsapp.com/send?phone=6282167511111">(+62) 821-6751-1111</a></li>
                                                <li><a href="#">hi@ebunga.co.id</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->

            <!-- haeader bottom Start -->
            <div class="haeader-bottom-area header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-4 col-5">
                            <div class="logo-area">
                                <a href="{{ url('/') }}"><img src="{{ asset('ladun/homepage/pic_asset/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="main-menu-area text-center">
                                <!--  Start Mainmenu Nav-->
                                <nav class="main-navigation">
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home Page One</a></li>
                                                <li><a href="index-2.html">Home Page Two</a></li>
                                                <li><a href="index-box.html">Home Boxed Layout 1</a></li>
                                                <li><a href="index-2-box.html">Home Boxed Layout 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Pages</a>
                                            <ul class="mega-menu">
                                                <li><a href="#">Column One</a>
                                                    <ul>
                                                        <li><a href="compare.html">Compare Page</a></li>
                                                        <li><a href="login-register.html">Login &amp; Register</a></li>
                                                        <li><a href="my-account.html">My Account Page</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.html">Column two</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Product Details 1</a></li>
                                                        <li><a href="product-details-2.html">Product Details 2</a></li>
                                                        <li><a href="checkout.html">Checkout Page</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Column Three</a>
                                                    <ul>
                                                        <li><a href="error404.html">Error 404</a></li>
                                                        <li><a href="cart.html">Cart Page</a></li>
                                                        <li><a href="wishlist.html">Wish List Page</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </nav>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-8 col-7">
                            <div class="right-blok-box d-flex">

                                <div class="user-wrap">
                                    <a href="wishlist.html">
                                        <span class="material-icons">
                                        assistant
                                        </span>
                                    </a>
                                </div>


                                <div class="shopping-cart-wrap">
                                    <a href="#"><i class="ion-ios-cart-outline"></i> <span id="cart-total">2</span></a>
                                    <ul class="mini-cart">
                                        <li class="cart-item">
                                            <div class="cart-image">
                                                <a href="product-details.html"><img alt="" src="https://demo.hasthemes.com/fultala-preview-v2/fultala/assets/images/product/product-01.jpg"></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="product-details.html">
                                                    <h4>Product Name 01</h4>
                                                </a>
                                                <span class="quantity">1 ×</span>
                                                <div class="price-box"><span class="new-price">$130.00</span></div>
                                                <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="cart-image">
                                                <a href="product-details.html"><img alt="" src="https://demo.hasthemes.com/fultala-preview-v2/fultala/assets/images/product/product-01.jpg"></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="product-details.html">
                                                    <h4>Product Name 03</h4>
                                                </a>
                                                <span class="quantity">1 ×</span>
                                                <div class="price-box"><span class="new-price">$130.00</span></div>
                                                <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                            </div>
                                        </li>
                                        <li class="subtotal-titles">
                                            <div class="subtotal-titles">
                                                <h3>Sub-Total :</h3><span>$ 230.99</span>
                                            </div>
                                        </li>
                                        <li class="mini-cart-btns">
                                            <div class="cart-btns">
                                                <a href="cart.html">View cart</a>
                                                <a href="checkout.html">Checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mobile-menu-btn d-block d-lg-none">
                                    <div class="off-canvas-btn">
                                        <i class="ion-android-menu"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- haeader bottom End -->

            <!-- main-search start -->
            <div class="main-search-active">
                <div class="sidebar-search-icon">
                    <button class="search-close"><span class="ion-android-close"></span></button>
                </div>
                <div class="sidebar-search-input">
                    <form>
                        <div class="form-search">
                            <input id="search" class="input-text" value="" placeholder="Search entire store here ..." type="search">
                            <button class="search-btn" type="button">
                                <i class="ion-ios-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- main-search start -->


            <!-- off-canvas menu start -->
            <aside class="off-canvas-wrapper">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="ion-android-close"></i>
                    </div>

                    <div class="off-canvas-inner">

                        <!-- mobile menu start -->
                        <div class="mobile-navigation">

                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="#">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home version 01</a></li>
                                            <li><a href="index-2.html">Home version 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">pages</a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title has-children"><a href="#">Column One</a>
                                                <ul class="dropdown">
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="login-register.html">Login &amp; Register</a></li>
                                                    <li><a href="my-account.html">My Account Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title has-children"><a href="#">Column two</a>
                                                <ul class="dropdown">
                                                    <li><a href="product-details.html">Product Details 1</a></li>
                                                    <li><a href="product-details-2.html">Product Details 2</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title has-children"><a href="#">Column Three</a>
                                                <ul class="dropdown">
                                                    <li><a href="error404.html">Error 404</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="wishlist.html">Wish List Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">shop</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->

                        <!-- offcanvas widget area start -->
                        <div class="offcanvas-widget-area">
                            <div class="off-canvas-contact-widget">
                                <ul>
                                    <li>
                                        Mon - Fri : 9am to 5pm
                                    </li>
                                    <li>
                                        <a href="#">0123456789</a>
                                    </li>
                                    <li>
                                        <a href="#">info@yourdomain.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="off-canvas-social-widget">
                                <a href="#"><i class="ion-social-facebook"></i></a>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                                <a href="#"><i class="ion-social-tumblr"></i></a>
                                <a href="#"><i class="ion-social-googleplus"></i></a>
                            </div>

                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->


        </header>

