<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

        <meta charset="utf-8">
        <!-- CSRF Token -->

        <meta name="csrf-token" content="{{ Session::token() }}"> 
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Honut Admin') }}</title>
        
        <!-- Styles -->
        <link href="{{ URL::asset('css/styles4bfa.css') }}" rel="stylesheet">
           
        <meta name="description" content="Honut Foods is a wholly owned Zimbabwean business corporation. The business was founded in 2011 by Lovemore Zvikomborero Mupeti (B.Sc. Hons Degree in Economics, UZ).">
        
        <meta name="title" content="Honut Foods is a wholly owned Zimbabwean business corporation. The business was founded in 2011 by Lovemore Zvikomborero Mupeti (B.Sc. Hons Degree in Economics, UZ).">
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
        <meta name="apple-mobile-web-app-capable" content="yes">


        {{-- <link rel="shortcut icon" href="images/szl-logo.png" type="image/x-icon"> --}}
        <link rel="shortcut icon" href="wp-content/themes/nooflow-understrap-child/img/honut-logo.png" type="image/x-icon">
        
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Honut Foods is a wholly owned Zimbabwean business corporation. The business was founded in 2011 by Lovemore Zvikomborero Mupeti (B.Sc. Hons Degree in Economics, UZ)." />
        
        <meta name="twitter:description" content="Honut Foods is a wholly owned Zimbabwean business corporation. The business was founded in 2011 by Lovemore Zvikomborero Mupeti (B.Sc. Hons Degree in Economics, UZ)."/>
        
        {{-- font owesome icons  --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        
          <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        {{-- {{ URL::asset('css/styles4bfa.css?id=0a1834926d53294f7c21') }} --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('custom/my.css') }}" /> --}}
            <!-- Scripts -->
        <script src="{{ asset('js/cart.js') }}" defer></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


     

   
</head>
<body>
    <div id="app">
            <div class="header" style="position:fixed;">

                    <div class="wrapper-all">
                        <div class="container" >
                            <div class="row">
                                    <a href="{{URL::asset('/')}}" data-transition="t1" class="logo" style="margin-left:-15%;"><img src="{{URL::asset('wp-content/themes/nooflow-understrap-child/img/honut-logo.png')}}" style="max-width:100%;"></a>
                             
                              
                                <div class="right" style="line-height:300%;">
                                    <!-- <div class="btn-search">
                                        <a href="#"><img src="assets/images/icon-search.svg"></a>
                                    </div> -->
                                    <?php 
                                        
                                    if (Auth::check()) {
                                    ?>
                
                                   
                
                                        {{-- <div class="btn-search">
                                        
                                        <a id="myBtn" href="#">
                                            <i class="fas fa-shopping-cart" style="font-size:2em;"></i>
                                            <span class="simpleCart_total notification" id="notify">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)
                                        </a>
                
                                        
                                       
                                       <span><a onclick="emptyCart()" class="simpleCart_empty" style="cursor: pointer;"><br/><i class="fas fa-minus-circle" style="font-size:2em; color:red;"></i> _empty cart</a></span> 
                                    </div> --}}

                                    <div class="row">
                                        <div class="col">
                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button>
                                          &nbsp;&nbsp;&nbsp;&nbsp;
                                          <button class="clear-cart btn btn-danger">Clear Cart</button></div>
                                    </div>
                                    <br/>


                                    <?php 


                
                                    
                                    }else {
                                        echo("");
                                    }
                                    ?>
                                   
                
                                    <div style="font-size:0.8em;">
                                    @guest
                                                
                                            <a id="nav-link" href="{{ route('home') }}">{{ __('Login') }}</a>
                                            <br/><br/>
                                        
                                        @if (Route::has('register'))
                                         
                                                <a id="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                
                                          
                                        @endif
                                         @else
                                         @php
                                             header('Location: index.php');
                                         @endphp
                                        
                                            <a id="nav-link" href="#" >
                                                {{ Auth:: user()->name }} 
                                            </a>
                
                                            
                                          
                
                
                                    
                
                                            
                                                <a id="nav-link" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            
                                        
                                    @endguest
                                    </div>
                                    {{-- <div class="toggle" id="toggle">
                                        <div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                
                    </div>
                {{-- <div class="bg-top-search"></div>
                <search-bar ref="searchBar"></search-bar> --}}
                
                
                {{-- <div class="nav-responsive">
                    <div class="bg-white"></div>
                    <div class="bg-red"></div>
                    <div class="wrapper-all">
                        <div class="container">
                            <a href="#" class="btn-close"><img src="assets/images/icon-close.svg"></a>
                            <div class="logo col-sm-9">
                                <a href="index.php" data-transition="t2"><img src="images/log_bw.svg" ></a>
                            </div>
                            <div class="columns row align-items-center">
                                <div class="col-12 col-sm-6 offset-sm-1 col-lg-8 offset-lg-0 left">
                                    <div class="nav-primary">
                                        <ul>
                                            <li><a class=""
                                                    href="http://localhost/schweppes_online_store/" data-transition="t2">Welcome</a></li>
                                            <li><a class=""
                                                    href="http://localhost/schweppes_online_store/products.php" data-transition="t2">Products</a></li>
                                            <li><a class=""
                                                    href="#" data-transition="t2">News</a></li>
                                            
                                          
                                    </div>
                                </div>
                                <div class="col-12 col-sm-5 col-lg-4 right">
                                    <div class="nav-secondary">
                                        <ul>
                                            <li><a class=""
                                                    href="{{URL::asset('/contact')}}" data-transition="t2">Contact us</a></li>                                
                                             </ul>
                                    </div>
                                                        <div class="social">
                                        <ul>
                                                                        <li>
                                                <a href="#" target="_blank">
                                                    <img src="assets/images/social/icon-facebook.svg">
                                                    <img src="assets/images/social/icon-facebook-hover.svg" class="hover">
                                                </a>
                                            </li>
                                                                        <li>
                                                <a href="#" target="_blank">
                                                    <img src="assets/images/social/icon-twitter.svg">
                                                    <img src="assets/images/social/icon-twitter-hover.svg" class="hover">
                                                </a>
                                            </li>
                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 --}}




                





                {{-- <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                      <span class="close" style="color:red;font-size:500%;">&times;</span>

                      <span class="simpleCart_total notification" id="notify" style="color:#999999;">$0.00</span>
                      for <span id="simpleCart_quantity" class="simpleCart_quantity"></span>item
                      <span id="simpleCart_name" class="simpleCart_name"></span>name
                 
                       


                        <div class="col-10 col-md-12">
                            
                            <span class="title--title10 line line--red not-visible is-visible">–</span> 
                            <h4 class="title--title10 not-visible is-visible">Enter your Phone Number</h4> 
                            <br/>
                            <div class="form not-visible is-visible">
                                <form id="contact_form" method="post" action="#" class="form-validate finalPayment">
                                <div class="row">     
                                        <div class="col-sm-6">
                                                <div class="form-group errorContent">
                                                    <input type="text" name="phone" data-msg-email="Please enter a valid Phone" data-msg-required="This field is required" required="required" aria-describedby="email-error" aria-invalid="true" id="phone" minlength="10" maxlength="10"> 
                                                    <div class="placeholder">Phone <span class="example">077123456</span></div>   
                                                </div> 
                                            </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="button button--red fullwidth">
                                                <button onclick="checkOut()" style="width:20%;float:right;border:none;">
                                                    <div class="bg"></div> 
                                                    <a id="pay" style="cursor: pointer;">PAY </a>
                                                </button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                   
                        
                         
                    </div>      
                  
                </div> --}}
                
                
                

        <main class="py-4">
            @yield('content')
        </main>
    </div>
 
</body>
</html>
