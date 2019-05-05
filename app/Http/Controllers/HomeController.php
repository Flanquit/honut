<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Products;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
     
    {
        $userId = \Auth::id();
        $user = User::find($userId);
        $users = user::all();
        $products = Products::all();
        $total_sales = DB::table('sales')->count();
        $sales_total_amount = DB::table('sales')->sum('price');
       
    
        if($user->admin == 1)
        {
            $customers =  DB::table('users')->count();
            $total_products =  DB::table('products')->count();
            return view('dashboard')->with(compact('products', 'users', 'customers', 'total_products', 'total_sales', 'sales_total_amount'));
        }
            $customers =  DB::table('users')->count();
            $total_products =  DB::table('products')->count();
            return view('dashboard')->with(compact('products', 'users', 'customers', 'total_products', 'total_sales', 'sales_total_amount'));
        
    }







    public function contact()
     
    {
        $userId = \Auth::id();
        $user = User::find($userId);
        $users = user::all();
        $products = Products::all();
    
        if($user->admin == 1)
        {
            $customers =  DB::table('users')->count();
            $total_products =  DB::table('products')->count();
            return view('dashboard')->with(compact('products', 'users', 'customers', 'total_products'));
        }
        $customers =  DB::table('users')->count();
        $total_products =  DB::table('products')->count();
        return view('dashboard')->with(compact('products', 'users', 'customers', 'total_products'));
        
    }


    public function dashboard()
     
    {
        $userId = \Auth::id();
        $user = User::find($userId);
        $users = user::all();
        $products = Products::all();
        $total_sales = DB::table('sales')->count();
        $sales_total_amount = DB::table('sales')->sum('price');

        if($user->admin == 1)
        {
            $customers =  DB::table('users')->count();
            $total_products =  DB::table('products')->count();
            return view('dashboard')->with(compact('products', 'users', 'customers', 'total_products', 'total_sales', 'sales_total_amount'));
        }
        $customers =  DB::table('users')->count();
        $total_products =  DB::table('products')->count();
        return view('dashboard')->with(compact('products', 'users', 'customers', 'total_products', 'total_sales', 'sales_total_amount'));
        
    }
    
}






        
        
           
      




