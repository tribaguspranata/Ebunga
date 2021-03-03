@php 
    $userLogin = session('userLogin');
    if($userLogin === null){
        $sessionUser = 'no';
    }else{
        $sessionUser = 'yes';
    }
@endphp
<!DOCTYPE html>
<html>

<head>
    <title>Ebunga - {{ $page }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta name="description" content="Ebunga.co.id - Web site created using create-react-app" />
    {{-- Bootstrap  --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="https://media.publit.io/file/ebungaasset/fav.png"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/') }}/style-res-product-detail.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/') }}/style-about.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/') }}/style-product-detail.css">
    <link rel="stylesheet" type="text/css" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/style-res-about.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/') }}/style-flower.css">
    <link rel="stylesheet" type="text/css" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/style-faq.css">
    <link rel="stylesheet" type="text/css" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/style-login.css">
    <link rel="stylesheet" type="text/css" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/style-404.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/') }}/style-homev3.css">
    <link rel="stylesheet" type="text/css" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/style-shopping.css">
    <link rel="stylesheet" type="text/css" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/style-fix-nav.css">
    <link rel="stylesheet" type="text/css" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/style-form-search-mobile.css">
    <link rel="stylesheet" type="text/css" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/intlTelInput.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    {{-- Ebunga css  --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_custom/ebunga.css') }}">
    {{-- Slick  --}}
    <link rel="stylesheet" type="text/css" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/slick.css">
    <link rel="stylesheet" type="text/css" href="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/css-lib/front-home-page/slick-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    {{-- Gg font  --}}
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
    {{-- Font awesome  --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <header class="container" id="header-v3">

        <div class="row">
            
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 logo">
            <a href="{{ url('') }}"><img src="{{ env('EBUNGA_LOGO_SMALL') }}" alt="holiwood"></a>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 menu-mobile">
                <div class=" collapse navbar-collapse" id="myNavbar">

                    <form class="hidden-lg hidden-md form-group form-search-mobile">
                        <input type="text" name="search" placeholder="Search here..." class="form-control">
                        <button type="submit"><img src="{{ asset('ladun/homepage/pic_asset/util/Search.png') }}" alt="search" class="img-responsive"></button>
                    </form>

                    @include('layout.navbar_menu')

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-10 col-xs-9">
                <div class="nav navbar-nav navbar-right icon-menu" >
                    <li id="input-search" class="hidden-sm hidden-xs">
                        <a href="#"><img id="search-img" src="{{ asset('ladun/homepage/pic_asset/util/Search.png') }}" alt="search"></a>
                    </li>
                    <li class="dropdown cart-menu">
                        @php
                        if($sessionUser == 'yes'){
                            $linkLogin = "/account";
                            $propBtn = "";
                        }else{
                            $linkLogin = "javascript:void(0)";
                            $propBtn = "class=dropdown-toggle data-toggle=dropdown";
                        }
                        @endphp
                        <a href="{{ $linkLogin }}" {{ $propBtn }}><i class="far fa-user"></i>
                        </a>
                        @if($sessionUser == 'yes')
                        @php 
                            $user = $userLogin;
                            $userCap = substr($user, 0, 5)." ...";
                        @endphp
                        <span style="font-family:Poppins;font-weight: 500;color:#2c3e50;">{{ $userCap }}</span>
                        @else 
                        <div class="dropdown-menu" style="text-align:center;border-top:1px solid #cfcfcf;">
                            <div id="div-cart-menu" >
                                <a href="{{ url('/login') }}">Login</a>
                                <a href="{{ url('/register') }}" class="check">Sign Up</a>
                            </div>
                        </div>
                        @endif
                    </li>
                        @php 
                        $userLogin = session('orderSession');
                        @endphp
                    <li class="dropdown cart-menu">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown">
                            @if($userLogin === null)
                            <span class="material-icons" style="color:#2c3e50;">shopping_cart</span>
                            @else 
                            <span class="material-icons" style="color:#2c3e50;">add_shopping_cart</span>
                            @endif 
                        </a>
                        <div class="dropdown-menu">
                            @php 
                            if($userLogin === null){
                            @endphp 
                                <small style="font-family: Poppins;">You have no shopping items</small>
                            @php
                            }else{
                            @endphp
                                <div class="cart-1">
                                <div class="img-cart"><img src="http://landing.engotheme.com/html/jenstore/demo/img/collec-1.jpg" class="img-responsive" alt="holiwood"></div>
                                <div class="info-cart">
                                    <h1>Pink roses</h1>
                                    <span class="number">x1</span>
                                    <span class="prince-cart">$207.2</span>
                                </div>
                            </div>
                            <div class="total">
                                <span>Total:</span>
                                <span>$621.6</span>
                            </div>
                            <div id="div-cart-menu">
                                <a href="#!">Checkout</a>
                                <a href="#!" class="check">CHECK VIEW</a>
                            </div>
                            @php
                            }
                            @endphp

                        </div>
                    </li>
                </ul>
                </div>

            </div>
            <div class="navbar-header mobile-menu">
                <button type="button" class="navbar-toggle btn-menu-mobile" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

    </header>