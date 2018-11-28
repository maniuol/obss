@extends('vendor.frontend.layouts.app')




@section('content')
<br><br><br>
<div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->			
    <div class="col-md-6 col-sm-6 sign-in">
        <h4 class="">Sign in</h4>
        <p class="">Hello, Welcome to your account.</p>
        <div class="social-sign-in outer-top-xs">
            {{-- <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
            <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a> --}}
        </div>
        
        <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="form-group">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}<span>*</span></label>
                <input id="email" type="email" class="form-control unicase-form-control text-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
              <div class="form-group">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<span>*</span></label>
                <input id="password" type="password" class="form-control unicase-form-control text-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
               @endif
            </div>
            <div class="radio outer-xs">
                  <label>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                  </label>
                  
            </div>
            <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
        </form>					
    </div>
    <!-- Sign-in -->
    
    <!-- create a new account -->
    <div class="col-md-6 col-sm-6 create-new-account">
            {{-- <div class="card-header">{{ __('Register') }}</div> --}}
        <h4 class="checkout-subtitle">Create a new account</h4>
        {{-- <p class="text title-tag-line">Create your new account.</p> --}}
        <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<span>*</span></label>
                <input id="name" type="text" class="form-control unicase-form-control text-input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                   @endif
              </div>
            <div class="form-group">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}<span>*</span></label>
                    <input id="email" type="email" class="form-control unicase-form-control text-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<span>*</span></label>
                    <input id="password" type="password" class="form-control unicase-form-control text-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
            </div>
            <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}<span>*</span></label>
                    <input id="password-confirm" type="password" class="form-control unicase-form-control text-input" name="password_confirmation" required>
            </div>
            
               <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
        </form>
        
        
    </div>	
    <!-- create a new account -->			</div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
    
            <div class="logo-slider-inner">	
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->
        
    </div><!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div><!-- /.body-content 



@endsection