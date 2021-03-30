@include('layouts.header')



<section class="listghor_breadcrumb listghor_breadcrumb_1">
    <svg id="shape_1" width="272px" height="272px">
        <path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M136.000,-0.000 C211.111,-0.000 272.000,60.889 272.000,136.000 C272.000,211.111 211.111,272.000 136.000,272.000 C60.889,272.000 -0.000,211.111 -0.000,136.000 C-0.000,60.889 60.889,-0.000 136.000,-0.000 Z"/>
    </svg>
    <svg id="shape_2" width="272px" height="272px">
        <path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M136.000,-0.000 C211.111,-0.000 272.000,60.889 272.000,136.000 C272.000,211.111 211.111,272.000 136.000,272.000 C60.889,272.000 -0.000,211.111 -0.000,136.000 C-0.000,60.889 60.889,-0.000 136.000,-0.000 Z"/>
    </svg>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb_content text-center">
                    <h2>login</h2>
                    <ul class="breadcrumb_link">
                        <li><a href="/">Home</a></li>
                        <li>login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End listghor_breadcrumb section -->
<!-- Start listghor_login section -->
<section class="listghor_login section_padding wow fadeInUp">
    <div class="container">
        <div class="listghor_wrapper_form">
            <div class="wrapper_form_left bg_image" style="background-image: url(assets/images/login_bg.jpg);">
                <div class="content_text">
                    <h2>Find  Great Place <br>In Your City</h2>
                </div>
                <div class="brand_logo">
                    <img src="assets/images/logo.png" alt="">
                </div>
            </div>
            <div class="wrapper_form_right">
                <div class="form_title">
                    <h2>Join Us Today!</h2>
                    <p>Join our community and get all the  resources and guide you need for your startup or business.</p>
                    
                    <x-auth-session-status class="alert alert-danger" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
                </div>
                <div class="listghor_form">
                        <form method="POST" action="{{ route('login') }}" class="login_form">
                            @csrf
                        <div class="form_group">
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" placeholder="Email" aria-placeholder="password" class="form_control" type="email" name="email" :value="old('email')" required autofocus />

                        </div>
                        <div class="form_group">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="form_control"
                                            type="password"
                                            name="password"
                                            aria-placeholder="password"
                                            placeholder="Password"
                                            required autocomplete="current-password" />
                            
                        </div>
                        <div class="form_group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="single_checkbox">
                                        <input id="remember_me" type="checkbox" class="single_input"  name="remember">
                                          <label class="single_input_label sigle_input_check" for="remember_me"><span>Remember me</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="forgot_link float-right">
                                        <a href="{{ route('password.request') }}">Forgot password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form_button">
                            <button type="submit" class="listghor_btn form_btn">sign in</button>
                        </div>
                        <div class="form_text">
                            <p>Don’t have an account?<a href="/register"> Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End listghor_login section -->

@include('layouts.footer')