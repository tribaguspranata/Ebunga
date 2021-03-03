@include('futala_layout.header')

<!-- breadcrumb-area start -->
        <div class="breadcrumb-area section-ptb" id="divBreadcumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="breadcrumb-title">Login &amp; Register</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Login &amp; Register</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <div id="divSuccessRegister" style="text-align:center;display:none;margin-bottom:40px;">
          <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_4iPre3.json" mode="bounce" background="transparent" speed="1" style="width: 300px; height: 300px;margin:auto;" loop autoplay></lottie-player>
          <h5>Thank for registering, please check your inbox mail to activate account.</h5>
          <h6>Already activate account? u can <a href="{{ url('/auth/account') }}">login</a> now</h6>

        </div>
        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb lagin-and-register-page" id="divAuth">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <!-- login-register-tab-list start -->
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1" @click="loginFormOpen">
                                    <h4> login </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2"  @click="registerFormOpen">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <!-- login-register-tab-list end -->
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">

                                                <div class="login-input-box">
                                                    <input type="text" id="txtEmail" placeholder="Email / Phonenumber">
                                                    <input type="password" id="txtPassword" placeholder="Password">
                                                </div>
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <a href="">Forgot Password?</a>
                                                    </div>
                                                    <div style="margin-top:20px;" id="capchaGoogle">
                                                        {!! NoCaptcha::display(['data-theme' => 'white', 'data-callback' => 'recaptcha_callback']) !!}
                                                    </div>
                                                    <div class="button-box">
                                                        <a class="login-btn btn" @click="loginAtc()"><span>Login</span></a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                                <div class="login-input-box">
                                                    <input type="text" id="txtFullNameReg" placeholder="Full Name">
                                                    <input type="text" id="txtPhoneNumberReg" placeholder="Your phone number" id="txtPhoneNumber" value="(62)">
                                                    <input type="text" id="txtEmailReg" placeholder="Email">
                                                    <input type="password" id="txtPasswordReg" onkeyup="checkPassword()" placeholder="Password">
                                                </div>
                                                <div style="margin-top:20px;" id="capchaGoogle">
                                                    {!! NoCaptcha::display(['data-theme' => 'white', 'data-callback' => 'recaptcha_callback_register']) !!}
                                                </div>
                                                <div id="capNotifIsiField" style="padding-top:20px;color:red;font-weight:300px;font-family:Poppins;font-size:14px;line-height:20px;">
                                                    @{{ capMessage }}
                                                </div>
                                                <div id="capPasswordStrength" style="padding-top:20px;font-weight:300px;font-family:Poppins;font-size:14px;line-height:20px;">
                                                    <ul>
                                                        <li id="passReg_1">Password length must greater than 4 character</li>
                                                        <li id="passReg_2">Password must contain alphabet & number combination</li>
                                                    </ul>
                                                </div>
                                                <div class="button-box">
                                                    <a class="register-btn btn" @click="registerAtc()"><span>Register</span></a>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="divLoading" style="text-align:center;display:none;">
                                  <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_jryyrscd.json" mode="bounce" background="transparent" speed="1" style="width: 300px; height: 300px;margin:auto;" loop autoplay></lottie-player>
                                  <h5 id="txtCapLoading"></h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->

{!! NoCaptcha::renderJs() !!}

@include('futala_layout.footer')
