@extends('layouts.app')

@section('content')
<div class="main">
        
        <div class="wrapper-all">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            {{-- to have some SVG white fading background --}}
                            <img src="assets/images/login.svg">
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="center" style="margin-top: -10%;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                            <div class="box login">
                                <div class="row justify-content-center">
                                    <div class="col-10 col-md-8">
    
                                        <h1 class="title--tag title--tag--black not-visible is-visible">Sign in</h1> 
                                        <span class="title--title10 line line--red not-visible is-visible">–</span> 
                                        <h2 class="title--title10 not-visible is-visible">Honut Admin</h2> 
    
                                        <div class="form not-visible is-visible">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <style>
                                                    
                                                </style>
                                                
                                                
                                                <div class="form-group errorContent">
                                                    <input for="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required> 
                                                    
                                                    <div class="placeholder" style="font-size:0.9em;">Email address</div>
                                                    @if ($errors->has('email'))
                                                    <div class="tooltip-alert">        
                                                        <div class="alert--top"></div>        
                                                        <div class="alert--middle">            
                                                            <div class="alert--center">
    
                                                                <div id="emailLogin-error" class="error">This field is required</div>
                                                                                                             
                                                            </div>        
                                                        </div>    
                                                    </div>
                                                    @endif
                                                </div> 
                                                
                                                <div class="form-group errorContent">
                                                    <input type="password" required="required" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> 
                                                    <div class="placeholder"  style="font-size:0.9em;">Password</div>
    
                                                    
                                                    <div class="tooltip-alert">        
                                                        <div class="alert--top"></div>        
                                                            <div class="alert--middle">            
                                                                <div class="alert--center">
                                                                    <div id="password-error" class="error">This field is required</div>
                                                                </div>        
                                                            </div>    
                                                        </div>
                                                    </div> 
                                                 
                                                    @if (Route::has('password.request'))
                                                    <div class="forgot-password">
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                    </div> 
                                                    @endif
    
                                                   
                                                       
    
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                                    <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
    
                                                    <div class="form-group">
                                                        <div class="button button--red fullwidth">
                                                            <button type="submit"><div class="bg">
                                                        </div> 
                                                        <span> {{ __('Login') }}</span></button>
    
                                                        {{-- <input type="submit" value="submit"/> --}}
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </div> 
                                            <div class="txt--p3 grey not-visible is-visible"><p>Don't have an account?  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection
