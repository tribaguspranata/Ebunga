@include('layout.header_account')

<!-- breadcrumb-area start -->
<div class="breadcrumb-area section-ptb" id="divBreadcumb" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-title">@{{ titleForm }}</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard Seller</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

  <!-- main-content-wrap start -->
  <div class="main-content-wrap section-ptb my-account-page" id="divUtama">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="account-dashboard">
                            <div class="dashboard-upper-info">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="d-single-info">
                                            <table>
                                                <tr>
                                                    <td><img src="{{ asset('ladun/ebunga_asset/image/user/user-cat.jpg') }}" style="width: 60px;"></td>
                                                    <td>
                                                    <p class="user-name">Hi, <span>{{ $userLogin }}</span></p>
                                                    <p>( not you? please <a href="{{ url('/logout') }}">Log Out</a>)</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="d-single-info">
                                            <div class="card card-hero" style="margin-bottom:-12px;">
                                                <div class="card-header" style="text-align: center;">
                                                    <h4 style="color:#dff9fb;">1400</h4>
                                                    <strong>Total E-Cash</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="d-single-info" style="padding-left:20px;">
                                            <p>Want to buy a product? </p>
                                            <a href="{{ url('/account') }}" class="view-cart">Go to buyer page</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-2">
                                    <!-- Nav tabs -->
                                    <ul role="tablist" class="nav flex-column dashboard-list">
                                        <li><a href="#!" data-toggle="tab" @click="dashboardAtc" class="nav-link active">Dashboard</a></li>
                                        <li><a href="#!" data-toggle="tab" @click="myBranchAtc" class="nav-link">My Branch</a></li>
                                        <li><a href="#!" data-toggle="tab" @click="myProductAtc" class="nav-link">My Product</a></li>
                                        <li><a href="#!" data-toggle="tab" @click="myOrderAtc" class="nav-link">Orders</a></li>
                                        <li><a href="#!" data-toggle="tab" class="nav-link">E-Cash</a></li>
                                        <li><a href="#!" data-toggle="tab" class="nav-link">Settings</a></li>
                                        <li><a href="{{ url('/logout') }}" class="nav-link">logout</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-10">
                                    <!-- Tab panes -->

                                    <div class="tab-content dashboard-content">
                                        <div style="font-weight:300px;font-family:Poppins;font-size:14px;line-height:20px;display:none;" id="loaderPage">
                                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_jryyrscd.json" mode="bounce" background="transparent"  speed="1"  style="width: 300px; height: 300px;margin:auto;"  loop  autoplay></lottie-player>
                                        </div>
                                        <div id="divContainerUtama">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->

@include('layout.footer_account')
