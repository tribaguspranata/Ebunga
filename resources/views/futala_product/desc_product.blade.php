<div class="row" id="divDescProduct">
    <div class="col-12">
        <div class="product-details-tab mt-60">
            <ul role="tablist" class="mb-50 nav">
                <li class="active" role="presentation">
                    <a data-toggle="tab" role="tab" href="#description" class="active">Description</a>
                </li>
                <li role="presentation">
                    <a data-toggle="tab" role="tab" href="#sheet">Coverage Area</a>
                </li>
                <li role="presentation">
                    <a data-toggle="tab" role="tab" href="#reviews">Reviews</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-12">
        <div class="product_details_tab_content tab-content">
            <!-- Start Single Content -->
            <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                <div class="product_description_wrap">
                    <div class="product_desc mb--30">
                        <h2 class="title_3">Details</h2>
                        <p><?=$dataProduct -> deks_produk; ?></p>
                    </div>
                </div>
            </div>
            <!-- End Single Content -->
            <!-- Start Single Content -->
            <div class="product_tab_content tab-pane" id="sheet" role="tabpanel">
                <div class="pro_feature">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Kabupaten</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($dataCoverage as $coverage)
                        @php
                            $dataKelurahan = DB::table('tbl_kelurahan') -> where('id_kel', $coverage -> kd_area) -> first();
                            $dataKecamatan = DB::table('tbl_kecamatan') -> where('id_kec', $dataKelurahan -> id_kec) -> first();
                            $dataKabupaten = DB::table('tbl_kabupaten') -> where('id_kab', $dataKecamatan -> id_kab) -> first();
                        @endphp
                            <tr>
                                <td>{{ $dataKelurahan -> nama }}</td>
                                <td>{{ $dataKecamatan -> nama }}</td>
                                <td>{{ $dataKabupaten -> nama }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Single Content -->
            <!-- Start Single Content -->
            <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                <div class="row">
                    <div class="col-lg-7">

                        <!-- blog-details-wrapper -->
                        <div class="col-lg-12 review_address_inner">
                            <h5>Comments</h5>
                            <!-- Single Review -->
                            <div class="pro_review">
                                <div class="review_thumb">
                                    <img alt="review images" src="https://s3-id-jkt-1.kilatstorage.id/ebunga/team/pp.jpg">
                                </div>
                                <div class="review_details">
                                    <div class="review_info">
                                        <h5><a href="#">Helen Nancy</a></h5>
                                        <div class="rating_send">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <span>30 May, 2019</span> <span>10:20 pm</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teimpor in aliqua. Utf enim ad minim veniam,</p>

                                </div>
                            </div>
                            <!--// Single Review -->
                            <!-- Single Review -->
                            <div class="pro_review">
                                <div class="review_thumb">
                                    <img alt="review images" src="https://s3-id-jkt-1.kilatstorage.id/ebunga/team/pp.jpg">
                                </div>
                                <div class="review_details">
                                    <div class="review_info">
                                        <h5><a href="#">tome Shetty</a></h5>
                                        <div class="rating_send">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <span>Sep 11, 2019</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit con dipis cing elitdpon aliqua minim veniam,</p>
                                </div>
                            </div>
                            <!--// Single Review -->
                            <!-- Single Review -->
                            <div class="pro_review">
                                <div class="review_thumb">
                                    <img alt="review images" src="https://s3-id-jkt-1.kilatstorage.id/ebunga/team/pp.jpg">
                                </div>
                                <div class="review_details">
                                    <div class="review_info">
                                        <h5><a href="#">ketrin frans</a></h5>
                                        <div class="rating_send">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <span>Sep 25, 2019</span>
                                    </div>
                                    <p>dolore magna aliqua. Ut enim ad con Duis aute irur eritae pliciav aquuntu consectetur dunt ut labore et dolore magna aliqua. Ut enim adabz.</p>
                                </div>
                            </div>
                            <!--// Single Review -->
                        </div>
                        <div class="col-lg-12">
                            <div class="comments-reply-area">
                                <h5 class="comment-reply-title mb-30">Leave a Reply</h5>
                                <form action="#" class="comment-form-area">
                                    <div class="comment-input">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="comment-form">
                                                    <input type="text" required="required" name="Name" placeholder="Name *">
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="comment-form">
                                                    <input type="email" required="required" name="email" placeholder="Email *">
                                                </p>
                                            </div>

                                            <div class="col-lg-12">
                                                <p class="comment-form-comment">
                                                    <textarea class="comment-notes" required="required" placeholder="Comment *"></textarea>
                                                </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="comment-form-submit">
                                                    <button class="comment-submit">SUBMIT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--// blog-details-wrapper -->
                    </div>
                </div>
            </div>
            <!-- End Single Content -->
        </div>
    </div>
</div>