@extends('layouts.Admin_app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are an Admin!
                </div>
            </div>
        </div>
    </div>
</div> --}}

  

    
               <!-- BREADCRUMB-->
               <section class="au-breadcrumb m-t-75">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="au-breadcrumb-content">
                                        <div class="au-breadcrumb-left">
                                            
                                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                <li class="list-inline-item active">
                                                    <a href="{{URL::asset('dashboard')}}">Home </a>
                                                </li>
                                                <li class="list-inline-item seprate">
                                                    <span>/</span>
                                                </li>
                                                <li class="list-inline-item">Add Products</li>
                                            </ul>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END BREADCRUMB-->
    
    
                <!-- Add Products-->

                <div class="row" style="margin-left:25%">
                        <div class="col-lg-8" >
                            <div class="card">
                               
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2">Add Product Details</h3>
                                    </div>
                                    <hr>
                                   
                                     {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST','enctype' => 'multipart/form-data' ]) !!}
                                     
                                        
                                    
                                        <div class="form-group">
                                            <label for="product_title" class="control-label mb-1">Product title</label>
                                            <input id="cc-pament" name="product_title" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                        </div>

                                        <div class="row">
                                                <div class="col-6">
                                                        <div class="form-group">
                                                                <label for="Product_Qnty" class="control-label mb-1">Product Quantity</label>
                                                                <input id="cc-pament" name="Product_Qnty" type="number" class="form-control" aria-required="true" aria-invalid="false" >
                                                        </div>
                                                </div>
                                                <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="Price" class="control-label mb-1">Price</label>
                                                            <input id="cc-number" name="price" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                        </div>
                                                </div>
                                        </div>

                                        
                                        <div class="form-group has-success">
                                            <label for="product_description" class="control-label mb-1">Product description</label>
                                            <input id="cc-name" name="product_description" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>


                                        <div class="form-group">
                                               {{Form::file('imagePath')}}    
                                        </div>
                                        
                                        
                                        <div>
                                            <button id="Submit" type="submit" class="btn btn-lg btn-info btn-block">
                                                &nbsp;
                                                <span id="payment-button-amount">Add Product</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                        
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                       

                    </div>
              
                <!-- END add Products-->

@endsection
