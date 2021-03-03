@include('layout.header')

<main>

    @include('home.content_search');

    <div class="slider-banner">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active slide1">
                    <img src="{{ asset('ladun/homepage/pic_asset/slide_show/slider_1.jpg') }}" alt="holiwood">
                    <div class="carousel-caption">
                        <h3>IT'S YOUR DAY !</h3>
                        <h1 style="color:#353b48;">Happy<br>Birthday.</h1>
                        <a href="#">Shop Now!</a>
                    </div>
                </div>

                <div class="item slide2">
                    <img src="{{ asset('ladun/homepage/pic_asset/slide_show/slider_2.jpg') }}" alt="holiwood">
                    <div class="carousel-caption">
                        <h1>New<br>Collections</h1>
                        <a href="#">Shop now</a>
                    </div>
                </div>

                <div class="item slide1">
                    <img src="{{ asset('ladun/homepage/pic_asset/slide_show/slider_3.jpg') }}" alt="holiwood">
                    <div class="carousel-caption">
                        <h3>IT'S YOUR DAY !</h3>
                        <h1>Happy<br>Birthday.</h1>
                        <a href="#">Shop now</a>
                    </div>
                </div>
                <div class="item slide2">
                    <img src="{{ asset('ladun/homepage/pic_asset/slide_show/slider_1.jpg') }}" alt="holiwood">
                    <div class="carousel-caption">
                        <h1>New<br>Collections</h1>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="show-img">
        <div class="container">
            <div class="row">
                <div class="show-item">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-1">
                        <figure id="figure-show-1"><a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-show-image1.jpg" class="img-responsive" alt="holiwood"></a></figure>
                        <div class="show-title-1">
                            <h1>Lavender<br>Collections</h1>
                            <h2>SALE UP TO 20% OFF</h2>
                            <a href="#">Read more</a>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-2">
                        <figure id="figure-show-2"><a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-show-image2.jpg" class="img-responsive" alt="holiwood"></a></figure>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-3">
                        <figure id="figure-show-3"><a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-show-image3.jpg" class="img-responsive" alt="holiwood"></a></figure>
                        <div class="show-title-2 title-1">
                            <h1>Rose</h1>
                            <span>( 40 items )</span>
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-4">
                        <figure id="figure-show-4"><a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-show-image4.jpg" class="img-responsive" alt="holiwood"></a></figure>
                        <div class="show-title-2 title-2">
                            <h2>SALE UP TO 30% OFF</h2>
                            <h1>Happy<br>Women's day</h1>
                            <a href="#">Shop now</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="category">

        <!-- Modal quick view -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

            </div>
        </div>


        <div class="container" id="div_product_depan">
            <h1>@{{ cap_div }}</h1>
            <h3 style="font-family: Abril Fatface;">Bestseller for you</h3>
            <div>
                <ul class="nav nav-tabs menu-category">
                    <?php
                    $icon_kategori = array('local_florist', 'event_note', 'card_giftcard', 'cake');
                    $no = 0;
                    ?>
                    @foreach($kategori as $kat)
                    <li class="{{$kat -> kd_kategori}}-menu">
                        <a data-toggle="tab" href="#menu-tab-{{$kat -> kd_kategori}}">
                            <span class="material-icons">{{ $icon_kategori[$no] }}</span>
                            <h5>{{$kat -> nama_kategori}}</h5>
                        </a>
                        <figure id="shop-2" class="hidden-xs"></figure>
                    </li>
                    <?php $no++; ?>
                    @endforeach
                    <li class="all-menu">
                        <a href="{{ url('product') }}">
                            <span class="material-icons">apps</span>
                            <h5>All</h5>
                        </a>
                        <figure id="shop-2" class="hidden-xs"></figure>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="tab-content">
                    <?php
                    $subProdukBunga = DB::table('tbl_sub_kategori')->where('kd_kategori', 'BUNGA')->get();
                    $subProdukPapanBunga = DB::table('tbl_sub_kategori')->where('kd_kategori', 'PAPANBUNGA')->get();
                    $subProdukParcel = DB::table('tbl_sub_kategori')->where('kd_kategori', 'PARCEL')->get();
                    $subProdukCake = DB::table('tbl_sub_kategori')->where('kd_kategori', 'CAKE')->get();
                    ?>

                    <!-- Tab bunga  -->
                    <div id="menu-tab-BUNGA" class="tab-pane fade in active">
                        @foreach($subProdukBunga as $prod)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                            <div class="product-image-category">
                                <figure class="sale">
                                    <a href="{{ url('product/cat-'.$prod -> slug.'/area-all') }}">
                                    <img src="{{ env('URL_PIC_SUB_KATEGORY').$prod -> kd_sub_kategori.'.jpeg' }}" class="img-responsive" alt="holiwood">
                                    </a>
                                </figure>
                                <div class="product-icon-category">
                                    <a href="{{ url('product/cat-'.$prod -> slug.'/area-all') }}"><i class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-title-category">
                                <h5><a href="{{ url('product/cat-'.$prod -> slug.'/area-all') }}">{{ $prod -> nama_kategori }}</a></h5>
                                <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                <small>2 Product Sale</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- End tab bunga  -->

                     <!-- Tab bunga  -->
                     <div id="menu-tab-PAPANBUNGA" class="tab-pane fade in">
                        @foreach($subProdukPapanBunga as $prod)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                            <div class="product-image-category">
                                <figure class="sale">
                                    <a href="{{ url('product/cat-'.$prod -> slug.'/area-all') }}">
                                    <img src="{{ env('URL_PIC_SUB_KATEGORY').$prod -> kd_sub_kategori.'.jpeg' }}" class="img-responsive" alt="holiwood">
                                    </a>
                                </figure>
                                <div class="product-icon-category">
                                    <a href="{{ url('product/cat-'.$prod -> slug.'/area-all') }}"><i class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-title-category">
                                <h5><a href="{{ url('product/cat-'.$prod -> slug.'/area-all') }}">{{ $prod -> nama_kategori }}</a></h5>
                                <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                <h5>100 Total product</h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- End tab bunga  -->

                    <!-- Tab bunga  -->
                    <div id="menu-tab-PARCEL" class="tab-pane fade in">
                        @foreach($subProdukParcel as $prod)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                            <div class="product-image-category">
                                <figure class="sale">
                                    <a href="{{ url('product/cat-'.$prod -> slug.'/area-all') }}">
                                    <img src="{{ env('URL_PIC_SUB_KATEGORY').$prod -> kd_sub_kategori.'.jpeg' }}" class="img-responsive" alt="holiwood">
                                    </a>
                                </figure>
                                <div class="product-icon-category">
                                    <a href="{{ url('product/cat-'.$prod -> slug.'/area-all') }}"><i class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-title-category">
                                <h5><a href="{{ url('product/cat-'.$prod -> slug.'/area-all') }}">{{ $prod -> nama_kategori }}</a></h5>
                                <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                <small>2 Product Sale</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- End tab bunga  -->


                </div><!-- end tab content -->

            </div><!-- end row -->

        </div>
    </div>

    @include('home.promo_of_the_week')
    @include('home.latest_blog')
    @include('home.testimoni')
    @include('home.instagram_feed')

    @include('layout.footer')