@php
$dataCoverage = DB::table('tbl_coverage_area') -> where('kd_branch', $dataProduct -> id_branch) -> get();

@endphp

@include('futala_layout.header')

<!-- breadcrumb-area start -->
<div class="breadcrumb-area section-ptb" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-title">Product Details</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->
<div class="container">
<hr/>
</div>
<!-- main-content-wrap start -->
<div class="main-content-wrap section-ptb product-details-page">
    <div class="container">
        <div class="row" id="divProduct">
            <div class="col-xl-6 col-lg-7 col-md-6">
                <div class="product-details-images">
                    <div class="product_details_container">

                        <!-- product_big_images start -->
                        <div class="product_big_images-right">
                            <div class="portfolio-full-image tab-content">
                                <div role="tabpanel" class="tab-pane active product-image-position" id="img-tab-main">
                                    <a href="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA9119.jpg" class="img-poppu">
                                        <img id="divImgProduct" src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/{{ $dataProduct -> foto_utama }}" alt="Nanti ...">
                                        <span id="divCapProduct">Main variant </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- product_big_images end -->

                        <!-- Start Small images -->
                        <ul class="product_small_images-left vartical-product-active nav" role="tablist" style="padding-right:10px;">
                            <li role="presentation" class="pot-small-img active">
                                <a href="{{ env('JSVOID') }}" style="text-align: center;" @click="changeVariantAtc('{{ $dataProduct -> kd_produk }}', 'main', '{{ $dataProduct -> nama_produk }}')">
                                    <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/{{ $dataProduct -> foto_utama }}" alt="#!">
                                    <small>Main variant</small>
                                </a>
                            </li>
                            @foreach($dataVariant as $variant)
                            <li role="presentation" class="pot-small-img">
                                <a href="{{ env('JSVOID') }}" style="text-align: center;" @click="changeVariantAtc('{{ $variant -> kd_variant }}', 'variant', '{{ $variant -> nama_variant }}')">
                                    <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/variant/{{ $variant -> kd_variant }}.jpg" alt="#!">
                                    <small>{{ $variant -> nama_variant }}</small>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <!-- End Small images -->

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-6">
                <!-- product_details_info start -->
                <div class="product_details_info">
                    <h2>{{ $dataProduct -> nama_produk }}  <br/>(<span id="capJudulProduct">Main variant</span>)</h2>
                    <!-- pro_rating start -->
                    <div class="pro_rating d-flex">
                        <ul class="product-rating d-flex">
                            <li><span class="ion-android-star-outline"></span></li>
                            <li><span class="ion-android-star-outline"></span></li>
                            <li><span class="ion-android-star-outline"></span></li>
                            <li><span class="ion-android-star-outline"></span></li>
                            <li><span class="ion-android-star-outline"></span></li>
                        </ul>
                        <!-- <span class="rat_qun"> (Based on 0 Ratings) </span> -->
                        <br />
                    </div>
                    <small>This product have 922 view & 122 rating</small>
                    <hr />
                    <div class="form-group">
                        <label>Price</label>
                        <h5>Rp. {{ number_format($dataProduct -> harga) }}</h5>
                    </div>
                    <input type="hidden" value="{{ $dataProduct -> kategori }}" id="txtKategoriHidden">
                    <!-- pro_dtl_prize end -->
                    <!-- pro_dtl_color start-->
                    <hr />
                    <div class="form-group">
                        <label>Choose Variant</label>
                        <select class="form-control" style="width: 200px;" id="txtVariant" onchange="changeVariantSelectBox()">
                            <option value="{{ $dataProduct -> kd_produk }}|main|{{ $dataProduct -> nama_produk }}">Main variant</option>
                            @foreach($dataVariant as $variant)
                            <option value="{{ $variant -> kd_variant }}|variant|{{ $variant -> nama_variant }}">{{ $variant -> nama_variant }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- pro_dtl_color end-->
                    <!-- product-quantity-action start -->
                    <div class="form-group">
                        <label>Quantity :</label>
                        <input type="number" id="txtQt" value="1" class="form-control" style="width: 80px;">
                    </div>
                    <!-- product-quantity-action end -->
                    <!-- pro_dtl_btn start -->
                    <ul class="pro_dtl_btn">
                        <li><a href="{{ env('JSVOID') }}" id="btnBuyNow" class="buy_now_btn" @click="buyNowAtc">BUY NOW</a></li>
                        <li><a href="#!"><i class="ion-heart"></i></a></li>
                    </ul>
                    <!-- pro_dtl_btn end -->
                    <!-- pro_social_share start -->
                    <div class="pro_social_share d-flex">
                        <label>Share :</label>
                        <ul class="pro_social_link">
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <!-- pro_social_share end -->
                </div>
                <!-- product_details_info end -->
            </div>
        </div>

        <div id="divModelPayment" style="text-align: center;display:none;margin-top:-50px;">
            <h4>Product Order </h4>
            <img id="figureStepOrder" src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/figure/order_step_1.png" style="width: 500px;">
        </div>

        @include('futala_product.desc_product')

        @if($dataProduct -> kategori === 'BUNGA')
            @include('futala_product.order_bunga')
        @elseif($dataProduct -> kategori === 'PAPANBUNGA')
            @include('futala_product.order_bunga')
        @elseif($dataProduct -> kategori === 'PARCEL')
            @include('futala_product.order_bunga')
        @elseif($dataProduct -> kategori === 'CAKE')
            @include('futala_product.order_bunga')
        @endif

    </div>
</div>
<!-- main-content-wrap end -->

<!-- render google capcha js  -->
{!! NoCaptcha::renderJs() !!}

<script>
    var namaProdukAwal = "{{ $dataProduct -> nama_produk}}";
    var kdProdukAwal = "{{ $dataProduct -> kd_produk }}";
</script>

@include('futala_layout.footer')
