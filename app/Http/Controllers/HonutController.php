<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\User;
use DB;

class HonutController extends Controller
{
    
public function honut_products()
     
{
    $userId = \Auth::id();
    $user = User::find($userId);
    $users = user::all();
    $products = Products::all();
    $total_sales = DB::table('sales')->count();
    $sales_total_amount = DB::table('sales')->sum('price');


        $customers =  DB::table('users')->count();
        $total_products =  DB::table('products')->count();
        return view('honut_products')->with(compact('products', 'users', 'customers', 'total_products','total_sales', 'sales_total_amount'));

}

    
public function about()
     
{
    $userId = \Auth::id();
    $user = User::find($userId);
    $users = user::all();
    $products = Products::all();
    $total_sales = DB::table('sales')->count();
    $sales_total_amount = DB::table('sales')->sum('price');


        $customers =  DB::table('users')->count();
        $total_products =  DB::table('products')->count();
        return view('about')->with(compact('products', 'users', 'customers', 'total_products','total_sales', 'sales_total_amount'));

}



    
public function contact()
     
{
    $userId = \Auth::id();
    $user = User::find($userId);
    $users = user::all();
    $products = Products::all();
    $total_sales = DB::table('sales')->count();
    $sales_total_amount = DB::table('sales')->sum('price');


        $customers =  DB::table('users')->count();
        $total_products =  DB::table('products')->count();
        return view('contacts')->with(compact('products', 'users', 'customers', 'total_products','total_sales', 'sales_total_amount'));

}


}


