@include('layout.header')

<main id="divRegister">
    <div class="content-search">

        <div class="container container-100">
            <i class="far fa-times-circle" id="close-search"></i>
            <h3 class="text-center">what are your looking for ?</h3>
            <form method="get" action="/search" role="search" style="position: relative;">
                <input type="text" class="form-control control-search" value="" autocomplete="off" placeholder="Enter Search ..." aria-label="SEARCH" name="q">

                <button class="button_search" type="submit">search</button>
            </form>
        </div>

    </div>
    <div class="banner">
        <div class="container">
            <figure id="banner-about"><a href="#"><img src="{{ asset('ladun/ebunga_asset/image/others/cs.jpg') }}" class="img-responsive" alt="img-holiwood"></a></figure>
            <div class="title-banner">
                <h1>Create account at Ebunga</h1>
                <p><a href="#!" title="Home">Home</a><i class="fa fa-caret-right"></i>Register</p>
            </div>

        </div>

    </div>
    <div class="container container-ver2">
        <div class="page-login box space-50">
            <div class="row">
                <div class="col-md-6 sign-in space-30" id="divFormRegistrasi">
                <h3>Create A New Account</h3>
                    <!-- End social -->
                        <form class="form-horizontal">
                            <div class="group box space-20">
                                <label class="control-label" for="txtFullName">Full Name</label>
                                <input class="form-control" type="text" placeholder="Your full name" id="txtFullName">
                                <label class="control-label" for="txtPhoneNumber">Phone Number *</label>
                                <input class="form-control" type="text" placeholder="Your phone number" id="txtPhoneNumber">
                                <label class="control-label" for="txtEmailRegistrasi">Email Adress *</label>
                                <input class="form-control" type="text" placeholder="Your email" id="txtEmailRegistrasi">
                                <label class="control-label" for="txtPasswordRegistrasi">Password *</label>
                                <input class="form-control" type="password" onkeyup="checkPassword()" placeholder="Your password" id="txtPasswordRegistrasi">
                                @if($referralStatus == 'yes')
                                    <input type="hidden" value="{{ $idReferral }}" id="txtReferralCode">
                                @else
                                <div style="display:none;">
                                  <label for="txtReferralCode" class=" control-label">Referral Code</label>
                                  <input class="form-control" type="text" value="ebunga-seller" placeholder="Your referral code" id="txtReferralCode">
                                </div>
                                @endif
                                <div style="margin-top:20px;" id="capchaGoogle">
                                    {!! NoCaptcha::display(['data-theme' => 'white', 'data-callback' => 'recaptcha_callback']) !!}
                                </div>

                                <div id="capNotifIsiField" style="padding-top:20px;color:red;font-weight:300px;font-family:Poppins;font-size:14px;line-height:20px;">
                                    @{{ capMessage }}
                                </div>
                                <div id="capPasswordStrength" style="padding-top:20px;font-weight:300px;font-family:Poppins;font-size:14px;line-height:20px;">
                                    <ul>
                                        <li id="passReg_1">Password length must greater than 6 character</li>
                                        <li id="passReg_2">Password must contain alphabet & number combination</li>
                                    </ul>
                                </div>

                            </div>
                            <div style="font-weight:300px;font-family:Poppins;font-size:14px;line-height:20px;" id="loaderLokasi">
                                <img src="{{ asset('ladun/ebunga_asset/others/loading.svg') }}" style="width: 40px;"> Registering ... dont close this windows after complete registration
                            </div>
                            <div id="divAgree" style="display: none;">
                            <input id="chkAgree" type="checkbox" name="check" @click="changeAgree">
                            <label class="label-check" for="chkAgree"> I hereby agree to the
                                <a target="_blank" href="https://www.ebunga.com/halaman/form/Term-and-Condition.html"> terms and conditions </a> of Ebunga
                            </label>
                            </div>
                            <button type="button" class="link-v1 rt" @click="daftarAtc" id="btnSignUp">SIGN UP</button>
                        </form>

                    <!-- End form -->
                </div>
                <div id="divCompleteRegistration">
                                <h2>Registering complete</h2>
                                <h3>Thanks for register ... please check your mailbox to activate account.. </h3>
                                </div>
                <!-- End col-md-6 -->
                <div class="col-md-6">
                    <div class="register box space-50">
                        <div id="capNotifToLogin">
                        <h3>Already have account? go <a href="{{ url('/login') }}"><strong>sign in</string></a></h3>
                        </div>

                        <form class="form-horizontal" style="display: none;" id="formLogin">
                        <div class="group box space-20">
                            <label class="control-label" for="inputemail">EMAIL ADDRESS *</label>
                            <input class="form-control" type="text" placeholder="Your email" id="inputemail">
                        </div>
                        <div class="group box">
                            <label class="control-label" for="inputemail">PASSWORD *</label>
                            <input class="form-control" type="text" placeholder="Password" id="inputpass">
                        </div>
                        <div class="remember">
                            <input id="remeber" type="checkbox" name="check" value="remeber">
                            <label for="remeber" class="label-check">remember me!</label>
                            <a class="help" href="#" title="help ?">Forgot your password?</a>
                        </div>
                        <button class="link-v1 rt" type="button" @click="loginAtc">LOGIN NOW</button>
                    </form>
                    </div>
                    <!-- End register -->

                </div>
                <!-- End col-md-6 -->
            </div>
        </div>
    </div>

</main>

<!-- render google capcha js  -->
{!! NoCaptcha::renderJs() !!}

@include('layout.footer')
