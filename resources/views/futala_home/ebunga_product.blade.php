<!-- Start Product Area -->
<div class="porduct-area section-pb" id="divProduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title text-center">
                    <h2><span>Ebunga</span> Product</h2>
                    <p>List of products that we provide, we will list the products that you might need to give something special to the special person for you</p>
                </div>
            </div>
        </div>
        <div class="text-center pt-1 pb-1">
            <a href="javascript:void(0)" @click="switchProduct('Bunga')" class="btn btn-outline-primary btn-round active-btn" id="btnProdBunga" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/rose-outline.svg') }}" style="width: 30px;"> Bunga
            </a>
            <a href="javascript:void(0)" @click="switchProduct('PapanBunga')" id="btnProdPapanBunga" class="btn btn-outline-primary btn-round" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/easel-outline.svg') }}" style="width: 30px;"> Papan Bunga
            </a>
            <a href="javascript:void(0)" @click="switchProduct('Parcel')" class="btn btn-outline-primary btn-round"  id="btnProdCake" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/gift-outline.svg') }}" style="width: 30px;"> Parcel
            </a>
            <a href="javascript:void(0)" @click="switchProduct('Cake')" class="btn btn-outline-primary btn-round" id="btnProdCake" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/storefront-outline.svg') }}" style="width: 30px;"> Cake
            </a>
        </div>

        {{-- Kategori bunga --}}
        <div class="row product-two-row-4 divProduct" id="divKategoriBunga">
            @php
            $subKategori = DB::table('tbl_sub_kategori') -> where('kd_kategori', 'BUNGA') -> get();
            @endphp
            @foreach($subKategori as $subKategori)

            <div class="col-lg-12">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/sub-kategory-pic/{{ $subKategori -> kd_sub_kategori }}.jpeg" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">{{ $subKategori -> nama_kategori }}</a></h3>
                        <div class="price-box">
                            <span class="new-price" style="color:#1e272e;">200 Total product</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
            @endforeach
        </div>

        {{-- Kategori papan bunga --}}
        <div class="row product-two-row-4 divProduct" id="divKategoriPapanBunga">
            @php
            $subKategori = DB::table('tbl_sub_kategori') -> where('kd_kategori', 'PAPANBUNGA') -> get();
            @endphp
            @foreach($subKategori as $subKategori)

            <div class="col-lg-12">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/sub-kategory-pic/{{ $subKategori -> kd_sub_kategori }}.jpeg" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">{{ $subKategori -> nama_kategori }}</a></h3>
                        <div class="price-box">
                            <span class="new-price" style="color:#1e272e;">200 Total product</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
            @endforeach
        </div>

        {{-- Kategori parcel --}}
        <div class="row product-two-row-4 divProduct" id="divKategoriParcel">
            @php
            $subKategori = DB::table('tbl_sub_kategori') -> where('kd_kategori', 'PARCEL') -> get();
            @endphp
            @foreach($subKategori as $subKategori)

            <div class="col-lg-12">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/sub-kategory-pic/{{ $subKategori -> kd_sub_kategori }}.jpeg" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">{{ $subKategori -> nama_kategori }}</a></h3>
                        <div class="price-box">
                            <span class="new-price" style="color:#1e272e;">200 Total product</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
            @endforeach
        </div>

        {{-- Kategori cake --}}
        <div class="row product-two-row-4 divProduct" id="divKategoriCake">
            @php
            $subKategori = DB::table('tbl_sub_kategori') -> where('kd_kategori', 'CAKE') -> get();
            @endphp
            @foreach($subKategori as $subKategori)

            <div class="col-lg-12">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/sub-kategory-pic/{{ $subKategori -> kd_sub_kategori }}.jpeg" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">{{ $subKategori -> nama_kategori }}</a></h3>
                        <div class="price-box">
                            <span class="new-price" style="color:#1e272e;">200 Total product</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
            @endforeach
        </div>


    </div>
</div>
<!-- Start Product End -->
