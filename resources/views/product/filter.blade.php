@include('layout.header')
<main>
    @include('home.content_search');
    <div class="container banner">
        <figure id="banner-figure"><a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/banner-shop.jpg" class="img-responsive" alt="img-holiwood"></a></figure>
        <div class="text-banner">
            <h1>Tulips<br>Collection</h1>
            <p>SALE UP TO 20% OFF</p>
            <a href="#">Shop now</a>
        </div>
    </div>
    <input type="hidden" id="txtHidKdSlug" value="{{$categorySlug}}">
    <div class="container content">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 show-side">
                    <button class="sp1 hidden-sm hidden-xs">Show Sidebar</button>
                    <button class="btn-hide hidden-sm hidden-xs">Hide Sidebar</button>
                    <button id="btn-list"><i class="fas fa-list"></i></button>
                    <button id="btn-grid"><i class="fas fa-th"></i></button>
                    <span class="sp2 hidden-xs">Showing 1 - 12 of 30 results</span>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 show-select">
                    <span class="hidden-xs">Show</span>
                    <select id="select-show">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                    </select>
                    <select id="select-defaul">
                        <option>Defaul sorting</option>
                        <option>Defaul sorting</option>
                        <option>Defaul sorting</option>
                    </select>
                </div>
            </div>
            <!-- sidebar -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar" style="clear: left;">
                <div class="collapse navbar-collapse" id="mysidebar">
                    <ul class="list-group list-1">
                        <li class="list-group-item">CATEGORIES</li>
                        @foreach($dataKategori as $kategori)
                        @php
                        $idKategori = $kategori -> kd_kategori;
                        $dataSubKategori = DB::table('tbl_sub_kategori') -> where('kd_kategori', $idKategori) -> get();
                        @endphp
                        <li class="list-group-item">
                            <a href="#!">{{ $kategori -> nama_kategori }}</a><button class="accordion"></button>
                            <ul class="panel">
                                @foreach($dataSubKategori as $subKategori)
                                <li><a href="{{ url('product/cat-'. $subKategori -> slug .'/area-all')}}">{{ $subKategori -> nama_kategori }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                    <!--  -->
                    <ul class="list-group list-2">
                        <li class="list-group-item">Coverage Area</li>
                        @include('product.coverage_area')
                    </ul>
                    <!--  -->
                    <ul class="list-group list-3">
                        <li class="list-group-item">Price Category</li>
                        <li class="list-group-item list-item-3"><a href="#">Economic</a><span>(15)</span></li>
                        <li class="list-group-item list-item-3"><a href="#">Premium</a><span>(09)</span></li>
                    </ul>
                    <!--  -->
                    <ul class="list-group list-4">

                    </ul>
                    <!--  -->
                    <ul class="list-group list-3">
                        <li class="list-group-item">MANUFATURER</li>
                        <li class="list-group-item list-item-3"><a href="#">Consequat</a><span>(15)</span></li>
                        <li class="list-group-item list-item-3"><a href="#">Fermentum</a><span>(09)</span></li>
                        <li class="list-group-item list-item-3"><a href="#">Pellentestque</a><span>(12)</span></li>
                        <li class="list-group-item list-item-3"><a href="#">Sollicitudinl</a><span>(16)</span></li>
                    </ul>
                    <!--  -->
                    <ul class="list-group list-3">
                        <li class="list-group-item">SUBCATEGORY</li>
                        <li class="list-group-item list-item-3"><a href="#">Gifts</a><span>(20)</span></li>
                        <li class="list-group-item list-item-3"><a href="#">Chocolates</a><span>(07)</span></li>
                        <li class="list-group-item list-item-3"><a href="#">Card</a><span>(30)</span></li>
                        <li class="list-group-item list-item-3"><a href="#">Candy</a><span>(18)</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content-flower">

                @foreach($dataProduct as $product)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 product-flower">
                    <div class="product-image-flower">
                        <figure class="sale"><a href="{{ url('product/'. $product['slug']) }}">
                            <img src="{{ env('EBUNGA_S3_BUCKET') }}/product/main-product/{{ $product['foto_utama'] }}" class="img-responsive" alt="img-holiwood"></a>
                        </figure>
                        <div class="product-icon-flower">
                            <a href="{{ url('product/'.$product['slug']) }}"><i class="far fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-title-flower">
                        <h5><a href="#">{{ $product['nama_produk'] }}</a></h5>
                        <p class="p-title">It is a long established fact that a reader will be distracted by the readable content of a<br class="hidden-sm hidden-xs"> page when looking at its layout.</p>
                        <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span class="rating">3 Rating(s) | Add Your Rating(s)</span>
                        </div>
                        <div class="prince">Rp. {{ number_format($product['harga']) }}<s class="strike">{{$product['harga']}}</s></div>
                        <div class="add-cart">
                            <a href="{{ url('product/'.$product['slug']) }}" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pagi">
                    <ul class="pagination">
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/util/Send.png') }}" class="img-responsive" alt="img-holiwood"></a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    @include('layout.footer')