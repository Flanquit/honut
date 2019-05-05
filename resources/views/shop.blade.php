@extends('layouts.app')

@section('content')
{{-- the below for each is not working  --}}
@foreach ($users as $user)
{{-- 
$name = {{$user->names}}
$email = {{$user->email}};
$phone = {{$user->phone}};
$card = {{$user->card}};
     --}}

 
@endforeach



{{-- THE ABOVE NOT WORKING  --}}


    
<div class="main">

            
  <br/><br/><br/><br/>
    <!-- Feel your home -->
<div class="container"  data-cooling="black">


    @if(count($products) > 0)
    
    <div class="row">
         
     @foreach ($products as $product)
    
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{asset("storage/imgPath/$product->imagePath")}}" alt="">
            <div class="card-body">
              <p class="card-text" id="productName" value="{{$product->title}}">{{$product->title}}</p> <span class="pricing">${{$product->price}}</span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                   
                    <div class="button" >
                    {{-- <a href="javascript:;" onclick="addToCart({name:'{{$product->title}}', price: {{$product->price}},size:'none',thumb:'e.png'});" id="add-to-cart"> --}}
                        {{-- <div class="bg" ></div> <span>add to cart</span></a> --}}

                        
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>1 Litre</option>
                          <option>2 Litres</option>
                          <option>3 Litres</option>
                          <option>4 Litres</option>
                          <option>5 Litre</option>
                        </select>

                    <a href="#" data-name='{{$product->title}}' data-price='{{$product->price}}' class="add-to-cart btn btn-primary">add to cart</a>
                    </div>
                </div>
                <hr/>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      @else 
      <p id="productName">You have no Products</p>
      @endif
    </div>


@endsection


    {{-- Bootstrap JavaScripts --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


