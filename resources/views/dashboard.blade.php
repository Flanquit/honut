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
                                                        <a href="{{URL::asset('home')}}">Home </a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Dashboard</li>
                                                </ul>
                                            </div>
                                            <a href="{{URL::asset('add_products')}}"><button type="button" class="btn btn-outline-primary">Add Item</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- END BREADCRUMB-->
        
                    <!-- STATISTIC-->
                    <section class="statistic">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="statistic__item">
                                            <h2 class="number">{{$customers}}</h2>
                                            <span class="desc">Users</span>
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="statistic__item">
                                        <h2 class="number">{{$total_products}}</h2>
                                            <span class="desc">Products</span>
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="statistic__item">
                                            <h2 class="number">{{$total_sales}}</h2>
                                            <span class="desc">Total Sales done</span>
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="statistic__item">
                                        <h2 class="number">${{$sales_total_amount}}</h2>
                                            <span class="desc">Total Sales</span>
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- END STATISTIC-->
    

@endsection
