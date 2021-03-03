<div class="container container-ver2 space-padding-tb-30" style="display: none;" id="divStepOrder">

    <div class="row head-cart">
        <div class="col-md-4 space-30">
            <div class="item active center">
                <p class="icon">01</p>
                <h3>Order Details</h3>
            </div>
        </div>
        <!-- End col-md-4 -->
        <div class="col-md-4 space-30">
            <div class="item center">
                <p class="icon">02</p>
                <h3>Payment</h3>
            </div>
        </div>
        <!-- End col-md-4 -->
        <div class="col-md-4 space-30">
            <div class="item center">
                <p class="icon">03</p>
                <h3>Order completed</h3>
            </div>
        </div>
        <!-- End col-md-4 -->
    </div>

    <table class="table cart-table space-30">
        <thead>
            <tr>
                <th class="product-photo">Products</th>
                <th class="produc-name">Variant</th>
                <th class="produc-price">Price (@)</th>
                <th class="product-quantity">qty</th>
                <th class="total-price">Total</th>
                <th class="product-remove"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="item_cart">
                <td class="product-photo" style="text-align: center;">
                    <img id="txtPicSelected" src="{{ env('EBUNGA_S3_BUCKET') }}/product/main-product/{{ $dataProduct -> foto_utama }}" style="width:200px;border-radius:12px;" alt="Product Selected">
                    <br />
                    <span style="font: 400 18px 'Poppins';text-align:center;font-weight: bold;">{{ $dataProduct -> nama_produk }}</span>
                </td>
                <td class="produc-name"><a href="javascript:void(0)" id="txtVariantProductOrder">Main Product</a></td>
                <td class="total-price" id="capHargaAt">-</td>
                <td class="total-price" id="capQt">-</td>
                <td class="total-price" id="capTotalHarga">-</td>
                <td class="product-remove"></td>
            </tr>

        </tbody>
    </table>

</div>

@php
$userLogin = session('userLogin');
@endphp

@if($userLogin === null)
<div class="container container-ver2" id="divAccount_Prepare" style="margin-bottom:12px;font-family:Poppins;display:none;">
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <h3>you have not entered into your ebunga account, please log in to make ordering easier, or order as a guest</h3>
        </div>
    </div>
</div>
@else
<div class="container container-ver2" id="divAccount_Prepare" style="margin-top:-12px;font-family:Poppins;display:none;">
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <h4>You have logged in using your account ({{ $userLogin }})</h4>
            <h5>If this account not you, please <a href="{{ url('/logout') }}">Logout</a></h5>
        </div>
    </div>
</div>
@endif

<div class="container container-ver2" id="divStep_1" style="margin-top:20px;display:none;font-family:Poppins;">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputfname" class="control-label">Name of receiver <span class="color">*</span></label>
                <input type="text" placeholder="Enter your first name..." id="txtReceiver" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputfname" class="control-label">Delivery date <span class="color">*</span></label>
                <input type="date" id="txtDeliveryDate" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label">Greeting Card Caption</label>
                <textarea class="form-control" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Message for seller</label>
                <textarea class="form-control" style="resize: none;"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputfname" class="control-label">Receiver email<span class="color">*</span></label>
                <input type="text" placeholder="Enter your first name..." id="txtReceiverEmail" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputfname" class="control-label">Receiver phone<span class="color">*</span></label>
                <input type="text" class="form-control" id="txtReceiverPhone">
            </div>
            <div class="form-group">
                <label class="control-label">Receiver Address</label>
                <textarea class="form-control" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Provinsi</label><br/>
                <select class="js-example-basic-single">
                    <option> --- Choose ---</option>
                    @foreach($dataProvinsi as $provinsi)
                    <option>{{ $provinsi -> nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>