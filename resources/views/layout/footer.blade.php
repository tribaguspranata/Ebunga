<div class="info-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>About</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">News & Stories</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">History</a> </li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Our Studio</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Shop</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Stockists</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>Customer sevices</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Contact Us</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Trade Services</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Login/Register</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Delivery & Returns</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>Store</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Shop</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Wedding</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Birthday</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Women's day</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>Shop collection</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">New Arrivals</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Hot</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Sale</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Deal of the day</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social">
                        <p>Payment Method</p>
                        <img src="{{ env('FOOTER_BANK_TRANSFER') }}" style="width: 70px;">
                        <img src="{{ env('FOOTER_MASTERCARD') }}" style="width: 70px;">
                        <img src="{{ env('FOOTER_VISA') }}" style="width: 70px;">
                        <br/>
                        <img src="{{ env('FOOTER_GOPAY') }}" style="width: 70px;">
                        <img src="{{ env('FOOTER_OVO') }}" style="width: 70px;">
                        <img src="{{ env('FOOTER_DANA') }}" style="width: 70px;">
                        <h1>Newsletter</h1>
                        <h2>Sign up for our mailing list to get latest updates and offers</h2>
                        <form class="form-group" action="mail" method="post">
                            <input type="text" name="input-mail" placeholder="Your mail here" class="input-lg">
                            <button type="submit"><img src="{{ asset('ladun/homepage/pic_asset/util/Send.png') }}" alt="holiwood"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo-footer">
                    <a href="#" class="logo-bot"></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 copy">
                    <span>Copyright</span><i class="far fa-copyright"></i><span class="engo">2020 {{ env('APP_BUSINESS_NAME') }}</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gmail-footer">
                    <span id="gmail-footer"><a href="#">hi@ebunga.co.id</a></span>
                </div>
            </div>
        </div>
        <div class="hidden-lg hidden-md back-to-top fade"><i class="fas fa-caret-up"></i></div>
        <div class="BG-menu"></div>
    </footer>

    {{-- Bootstrap  --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js" integrity="sha512-DZqqY3PiOvTP9HkjIWgjO6ouCbq+dxqWoJZ/Q+zPYNHmlnI2dQnbJ5bxAHpAMw+LXRm4D72EIRXzvcHQtE8/VQ==" crossorigin="anonymous"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/jquery.min_af.js"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/bootstrap.min_0028.js"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/slick.js"></script>
    
    {{-- JS File  --}}

    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-flower.js"></script>
	<script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-show-sidebar.js"></script>
	
	<script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-shop.js"></script>
	<script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-range.js"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-slick.js"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-input-number.js"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-select-custom.js"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-back-top.js"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-sidebar.js"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/funtion-header-v3.js"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-search-v2.js"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/function-shopping-cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/js-lib/front-home-page/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
    <script>
        const server = "{{ url('') }}/";
    </script>
    <script src="{{ asset('ladun/homepage/js_custom/'.$jsFile) }}"></script>

</body>

</html>