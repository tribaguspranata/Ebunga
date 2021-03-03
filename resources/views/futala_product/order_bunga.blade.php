@php
$userLogin = session('userLogin');
if($userLogin === null){
    $sessionUser = 'no';
}else{
    $sessionUser = 'yes';
}
@endphp
<div class="row" id="divOrder">
    <hr />
    <div class="col">
        <div class="coupon-area">
            <!-- coupon-accordion start -->
            <div class="coupon-accordion">
                @if($sessionUser == 'yes')
                <h3>You login with account <b>{{ $userLogin }}</b>. If this account not you,
                    <a href="{{ ENV('JSVOID') }}" class="coupon" @click="silentLogout">Click here to logout</a>
                </h3>
                @else
                <h3>You need login to continue order? <span class="coupon" id="showlogin" onclick="showLogin()">Click here to login</span></h3>
                <div class="coupon-content" id="checkout-login">
                    <div id="divLoading" style="text-align:center;display:none;">
                        <lottie-player src="{{ env('LOTTIE_LOADING_LOGIN') }}" mode="bounce" background="transparent" speed="1" style="width: 300px; height: 300px;margin:auto;" loop autoplay></lottie-player>
                        <h5>Login to ebunga ... </h5>
                    </div>
                    <div class="coupon-info" id="divFormLogin">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>

                        <p class="coupon-input form-row-first">
                            <label>Username or email <span class="required">*</span></label>
                            <input type="text" name="email" id="txtUsername">
                        </p>
                        <p class="coupon-input form-row-last">
                            <label>password <span class="required">*</span></label>
                            <input type="password" name="password" id="txtPassword">
                        </p>
                        <div class="clear"></div>
                        {!! NoCaptcha::display(['data-theme' => 'white', 'data-callback' => 'recaptcha_callback']) !!}
                        <p style="margin-top:20px;">
                            <a class="button-login btn" name="login" id="btnLoginSilent" @click="loginSilentAtc">Login</a>
                            <label class="remember"><input type="checkbox" value="1"><span>Remember</span></label>
                        </p>
                        <p class="lost-password">
                            <a href="#">Lost your password?</a>
                        </p>

                    </div>
                </div>
                @endif

            </div>
            <!-- coupon-accordion end -->
            <!-- coupon-accordion start -->
            @if($sessionUser == 'no')

            @else
            <div class="row mt-4">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="wizard-steps">
                        <div class="wizard-step wizard-step-active disabled">
                            <div class="wizard-step-icon">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                            <div class="wizard-step-label">
                                Order Placed
                            </div>
                        </div>
                        <div class="wizard-step wizard-step" style="background-color: #fab1a0;" id="divStepDetailsOrder">
                            <div class="wizard-step-icon">
                                <i class="fas fa-money-check"></i>
                            </div>
                            <div class="wizard-step-label">
                                Details Order
                            </div>
                        </div>
                        <div class="wizard-step wizard-step" id="divStepPayment">
                            <div class="wizard-step-icon">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <div class="wizard-step-label">
                                Payment
                            </div>
                        </div>
                        <div class="wizard-step wizard-step">
                            <div class="wizard-step-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="wizard-step-label">
                                Order Complete
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="checkout-details-wrapper">

                <div class="row">

                    <div class="col-lg-6 col-md-6">

                        <div class="billing-details-wrap" id="divOrderDetails" style="padding-top:20px;">
                            <h4 class="shoping-checkboxt-title">Order Details</h4>
                            <div class="form-group">
                                <label>Sender Name</label>
                                <input type="text" class="form-control" v-model="senderName">
                            </div>
                            <div class="form-group">
                                <label>Receiver Name</label>
                                <input type="text" class="form-control" v-model="receiverName">
                            </div>
                            <div class="form-group">
                                <label>Receiver Email</label>
                                <input type="text" class="form-control" v-model="receiverEmail">
                            </div>
                            <div class="form-group">
                                <label>Receiver Phone Number</label>
                                <input type="text" class="form-control" v-model="receiverPhoneNumber">
                            </div>
                            <div class="form-group">
                                <label>Caption on greeting card</label>
                                <textarea class="form-control" style="resize: none;" v-model="captionOnGreetingCard"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Delivery Date</label>
                                <input type="date" class="form-control" id="txtDeliveryDate" onchange="deliveryDateSet()" min="<?php echo date("Y-m-d"); ?>">
                            </div>
                            <input type="hidden">
                            <div>
                              <label>Address Location</label>
                                <h6>Provinsi {{ $dataAlamat['namaProvinsi'] }}, {{ $dataAlamat['namaKabupaten'] }}, Kecamatan {{ $dataAlamat['namaKecamatan'] }}, Kelurahan {{ $dataAlamat['namaKelurahan'] }}</h6>
                            </div>
                            <div>
                                <label>Address Details</label>
                                <textarea class="form-control" v-model="detailAddress" style="resize: none;" placeholder="etc : roads, district name, building, dll"></textarea>
                            </div>
                        </div>

                        <div class="billing-details-wrap" id="divPayment" style="display: none;">
                            <div class="card card-hero">
                                <div class="card-header">
                                    <div class="card-icon">
                                        <i class="fas fa-cash-register"></i>
                                    </div>
                                    <h4 style="color: #ecf0f1;">Rp. 200.000</h4>
                                    <div class="card-description">Total payment</div>
                                </div>
                                <div class="card-body" id="divPaymentMethod">
                                    <h5>Choose payment method</h5>
                                    <div class="col-9 col-lg-9 col-m-9">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="chkBankTransfer">
                                                </td>
                                                <td>
                                                    <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/img-utility/bank-transfer.png" style="width: 100px;">
                                                    Bank Transfer
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" disabled>
                                                </td>
                                                <td>
                                                    <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/img-utility/visa-logo.jpg" style="width: 100px;">
                                                    Credit/Debit Card
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" disabled>
                                                </td>
                                                <td>
                                                    <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/img-utility/paypal-logo.jpg" style="width: 100px;">
                                                    Paypal
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" disabled>
                                                </td>
                                                <td>
                                                    <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/img-utility/bank-transfer.png" style="width: 100px;">
                                                    E-Wallet
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card-body" id="divPaymentInstruction" style="display: none;">
                                    <h5>Payment Instruction</h5>
                                    <p class="section-lead">
                                        Silahkan lakukan pembayaran sesuai ke rekening berikut :
                                        <table class="table">
                                            <tr>
                                                <td>Bank BRI</td>
                                                <td>08912-2223-12331-0222</td>
                                            </tr>
                                            <tr>
                                                <td>Bank Mandiri</td>
                                                <td>223-22233-122</td>
                                            </tr>
                                            <tr>
                                                <td>Bank BCA</td>
                                                <td>33-2233-122</td>
                                            </tr>
                                        </table>
                                        <p class="section-lead">Semua rekening atas nama "PT Ebunga Sukses Makmur".</p>
                                        <div>

                                        </div>
                                    </p>
                                </div>
                        </div>

                        <div id="divLoading" style="text-align:center;display:none;">
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_jryyrscd.json" mode="bounce" background="transparent" speed="1" style="width: 300px; height: 300px;margin:auto;" loop autoplay></lottie-player>
                            <h5>Processing new order ... </h5>
                        </div>
                    </div>
                    <div class="col" style="margin-top:15px;">
                        <a v-if="btnBawah === '2'" href="{{ env('JSVOID') }}" id="btnNextDelivery" class="btn btn-primary btn-icon icon-left" onclick="nextStep()" style="color: #ecf0f1;border-radius:10px;border:#ecf0f1 solid 1px;">
                            <i class="ion-arrow-right-b"></i> Next (Delivery Address)
                        </a>
                        <a v-else-if="btnBawah === '3'" href="{{ env('JSVOID') }}" id="btnNextPayment" onclick="paymentStep()" class="btn btn-primary btn-icon icon-left" style="color: #ecf0f1;border-radius:10px;border:#ecf0f1 solid 1px;">
                            <i class="ion-arrow-right-b"></i> Next (Payment)
                        </a>

                        <a v-else-if="btnBawah === '4'" href="{{ env('JSVOID') }}" id="btnProcessPayment" onclick="paymentProcess()" class="btn btn-primary btn-icon icon-left" style="color: #ecf0f1;border-radius:10px;border:#ecf0f1 solid 1px;">
                            <i class="ion-card"></i> Process to payment
                        </a>
                    </div>
                  </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="billing-details-wrap" style="background-color: white;padding-top:25px;padding-left:20px;border-radius:10px;">
                            <h5 class="shoping-checkboxt-title">Order Preview</h5>
                            <div>
                                <div class="summary">
                                    <div class="summary-info">
                                        <div style="text-align: center;">
                                            <img id="imgPrevPath" style="border-radius: 5px;width:300px;" src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/{{ $dataProduct -> foto_utama }}">
                                        </div>
                                        <h4 id="capProdukPreview">{{ $dataProduct -> nama_produk }}</h4>
                                        <div class="text-muted">Sold 3 items on 2 customers</div>
                                        <div class="d-block mt-2">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div>

                                <table class="table" style="font-size: 12px;font-weight:500;">
                                    <tr>
                                        <td>Sender Name</td>
                                        <td>@{{ senderName }}</td>
                                    </tr>
                                    <tr>
                                        <td>Receiver Name</td>
                                        <td>@{{ receiverName }}</td>
                                    </tr>
                                    <tr>
                                        <td>Receiver Email</td>
                                        <td>@{{ receiverEmail }}</td>
                                    </tr>
                                    <tr>
                                        <td>Receiver Phone Number</td>
                                        <td>@{{ receiverPhoneNumber }}</td>
                                    </tr>
                                    <tr>
                                        <td>Caption</td>
                                        <td><b>"<i>@{{ captionOnGreetingCard }}</i>"</b></td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Date</td>
                                        <td>@{{ deliveryDate }}</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Address</td>
                                        <td>
                                            <i>@{{ detailAddress }}</i><br />
                                            @{{ kelurahan }}<br />
                                            @{{ kecamatan }}<br />
                                            @{{ kabupaten }} <br />
                                            @{{ provinsi }}
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if($sessionUser == 'yes')
            <div class="coupon-accordion" style="margin-top:20px;">
                <h3>Have a coupon? <span class="coupon" id="showcoupon">Click here to enter your code</span></h3>
                <div class="coupon-content" id="checkout-coupon">
                    <div class="coupon-info">
                        <form action="#">
                            <p class="checkout-coupon">
                                <input type="text" placeholder="Coupon code">
                                <button type="submit" class="btn button-apply-coupon" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- coupon-accordion end -->
            @else

            @endif

        </div>
    </div>
</div>
