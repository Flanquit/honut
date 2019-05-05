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
    
                                        <h1 class="title--tag title--tag--black not-visible is-visible">Create your account</h1> 
                                        <span class="title--title10 line line--red not-visible is-visible">–</span> 
                                        <h2 class="title--title10 not-visible is-visible"> details.</h2> 
    





                                        <div class="form not-visible is-visible">
                                            {{-- <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                
                                                 {{-- name --}}
                                                <div class="form-group errorContent">
                                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                                    
                                                    <div class="placeholder" style="font-size:0.9em;">Name</div>
                                                    @if ($errors->has('name'))
                                                    <div class="tooltip-alert">        
                                                        <div class="alert--top"></div>        
                                                        <div class="alert--middle">            
                                                            <div class="alert--center">
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                                                                             
                                                            </div>        
                                                        </div>    
                                                    </div>
                                                    @endif
                                                </div> 
    
                                                 {{-- email --}}
                                                
                                                <div class="form-group errorContent">
                                                     <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    
    
                                                    <div class="placeholder" style="font-size:0.9em;">Email</div>
                                                    @if ($errors->has('email'))
                                                    <div class="tooltip-alert">        
                                                        <div class="alert--top"></div>        
                                                            <div class="alert--middle">            
                                                                <div class="alert--center">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </div>        
                                                            </div>    
                                                        </div>
                                                    </div> 
                                                    @endif
                                                </div>













    
                                                {{-- password --}}
                                                <div class="form-group errorContent">
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
    
                                                   <div class="placeholder" style="font-size:0.9em;">Password</div>
                                                   @if ($errors->has('password'))
                                                   <div class="tooltip-alert">        
                                                       <div class="alert--top"></div>        
                                                           <div class="alert--middle">            
                                                               <div class="alert--center">
                                                                   <strong>{{ $errors->first('password') }}</strong>
                                                               </div>        
                                                           </div>    
                                                       </div>
                                                   </div> 
                                                   @endif
                                               </div>
    
                                                {{--confirm password --}}
                                                <div class="form-group errorContent">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    
    
                                                   <div class="placeholder" style="font-size:0.9em;">Confirm Password</div>
                                                   @if ($errors->has('password'))
                                                   <div class="tooltip-alert">        
                                                       <div class="alert--top"></div>        
                                                           <div class="alert--middle">            
                                                               <div class="alert--center">
                                                                   <strong>{{ $errors->first('password') }}</strong>
                                                               </div>        
                                                           </div>    
                                                       </div>
                                                   </div> 
                                                   @endif
                                               </div>
    
                                                 
                                               
                                                       
    
                                                 
    
                                                    <div class="form-group">
                                                        <div class="button button--red fullwidth">
                                                            <button type="submit"><div class="bg">
                                                        </div> 
                                                        <span> {{ __('Register') }}</span></button>
    
                                                        {{-- <input type="submit" value="submit"/> --}}
                                                    </div>
                                                </div>
                                            </form> 










                                            
                                            
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
