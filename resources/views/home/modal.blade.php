<!-- Modal content-->
<div class="modal-content" id="div_modal_product">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        <div class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="img-pill-1" class="tab-pane fade in active">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-quick">
                        <figure class="fi-quick" style="text-align: center;">
                            <h1>QUICK VIEW</h1>
                        </figure>
                        <img src="" id="picMain" class="img-responsive" alt="holiwood">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
                    <h1>@{{ title_modal }}</h1>
                    <p class="p1" v-html="deks_produk"></p>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <span>10 Rating(s) | Add Your Rating</span>
                    </div>
                    <div class="prince"><span>@{{ currency }} @{{ Number(price).toLocaleString() }}</span><s class="strike">$300.02</s></div>
                    <figure class="fi-option">
                        <p class="option">Check your location (Kelurahan)</p>
                    </figure>

                    <div class="select-custom">
                        <input type="text" class="form-control" id="txtLokasi" onkeyup="getArea()">
                        <img src="{{ asset('ladun/ebunga_asset/others/loading.svg') }}" style="width: 40px;" id="loaderLokasi">
                        <div id="result-box" class="ebunga-style-pt-10"></div>
                        <p class="require">Required Fields <span>*</span></p>
                        <div class="Quality">

                            <div class="input-group input-number-group">
                                <span class="text-qua">Quanty:</span>
                                <div class="input-group-button">
                                    <span class="input-number-decrement">-</span>
                                </div>
                                <input class="input-number" type="number" min="0" max="1000" value="01">
                                <div class="input-group-button">
                                    <span class="input-number-increment">+</span>
                                </div>
                                <span class="dola">$ </span><span class="total">@{{ currency }} @{{ Number(price).toLocaleString() }}</span>
                            </div>

                        </div>
                        <div class="add-cart">
                            <a href="#" class="btn-add-cart">Add to cart</a>
                            <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                            <a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <ul class="nav nav-pills col-lg-6 col-md-6 col-sm-6 col-xs-12 img-pill">
            <li class="active col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="#!"><img src="{{ asset('ladun/ebunga_asset/image/product/EBUNGA891233.jpg') }}" class="img-responsive" alt="holiwood"></a>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="#!"><img src="{{ asset('ladun/ebunga_asset/image/product/EBUNGA891233.jpg') }}" class="img-responsive" alt="holiwood"></a>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="#!"><img src="{{ asset('ladun/ebunga_asset/image/product/EBUNGA891233.jpg') }}" class="img-responsive" alt="holiwood"></a>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="#!"><img src="{{ asset('ladun/ebunga_asset/image/product/EBUNGA891233.jpg') }}" class="img-responsive" alt="holiwood"></a>
            </li>
        </ul>
    </div>

</div>