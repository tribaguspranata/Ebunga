@include('layout.header')

<main id="divLogin">
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
            <figure id="banner-about"><a href="#"><img src="{{ asset('ladun/ebunga_asset/image/others/typing.jpg') }}" class="img-responsive" alt="img-holiwood"></a></figure>
            <div class="title-banner">
                <h1>Login to Ebunga</h1>
                <p><a href="#!" title="Home">Home</a><i class="fa fa-caret-right"></i>Login</p>
            </div>

        </div>

    </div>
    <div class="container container-ver2">
        <div class="page-login box space-50">
            <div class="row">
                <div class="col-md-6 sign-in space-30" id="divFormLogin">
                <h3>Login</h3>
                    <!-- End social -->
                        <form class="form-horizontal">
                            <div class="group box space-20">
                                <label class="control-label" for="txtUsername">Username / Email *</label>
                                <input class="form-control" type="text" placeholder="Username / Email" id="txtUsername">
                                <label class="control-label" for="txtPassword">Password *</label>
                                <input class="form-control" type="password" placeholder="Your password" id="txtPassword">
                            </div>
                            <div style="margin-top:20px;margin-bottom:20px;" id="capchaGoogle">
                                    {!! NoCaptcha::display(['data-theme' => 'white', 'data-callback' => 'recaptcha_callback']) !!}
                                </div> 
                            <div style="font-weight:300px;font-family:Poppins;font-size:14px;line-height:20px;display:none;" id="loaderLokasi">
                                <img src="{{ asset('ladun/ebunga_asset/others/loading.svg') }}" style="width: 40px;"> Registering ... dont close this windows after complete registration 
                            </div>
                            <button type="button" class="link-v1 rt" id="btnLogin" @click="loginAtc">Login</button>
                        </form>
                   
                    <!-- End form -->
                </div>
                
                <!-- End col-md-6 -->
                <div class="col-md-6">
                    <div class="register box space-50">
                        <div id="capNotifToLogin">
                        <h3>Adon't have an account? please <a href="{{ url('/register') }}">Register</a></h3>
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
                            <a class="help" href="#" title="help ?">Fogot your password?</a>
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