<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Products;
use App\Sales;
use App\User;
use DB;

class ProductsController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = \Auth::id();
        $user = User::find($userId);
        $users = user::all();
        $products = Products::all();
    
        if($user->admin == 1)
        {
            $customers =  DB::table('users')->count();
            $total_products =  DB::table('products')->count();
            return view('products')->with(compact('products', 'users', 'customers', 'total_products'));
        }
        $customers =  DB::table('users')->count();
        $total_products =  DB::table('products')->count();
        return view('products')->with(compact('products', 'users', 'customers', 'total_products'));

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $userId = \Auth::id();
        $user = User::find($userId);
        $users = user::all();
        $products = Products::all();
      
    
        if($user->admin == 1)
        {
            $customers =  DB::table('users')->count();
            $total_products =  DB::table('products')->count();
            return view('add_products')->with(compact('products', 'users', 'customers', 'total_products'));
        }
        $customers =  DB::table('users')->count();
        $total_products =  DB::table('products')->count();
        return view('add_products')->with(compact('products', 'users', 'customers', 'total_products'));
        
    }


    public function add_sale(Request $request)
    {
        // $price = $_POST['amount'];
        // dd($price);
        
        $userId = \Auth::id();
        $user = User::find($userId);
        $users = user::all();
        $products = Products::all();
        $sales = Sales::all();
    
        if($user->admin == 1)
        {
             

            return view('home')->with(compact('products', 'users', 'customers', 'total_products'));
        }

        return view('home')->with(compact('products', 'users', 'customers', 'total_products'));
             
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $this->validate($request, [
            'product_title' => 'required',
            'Product_Qnty' => 'required',
            'price' => 'required',
            'product_description' => 'required',
             'imagePath' => 'image|nullable|max:1999',
        ]);

        //hanlde file upload
        if ($request->hasFile('imagePath')) {
            //Get file with the extension
            $filenameWithExt = $request->file('imagePath')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('imagePath')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('imagePath')->storeAs('public/imgPath', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        

        // create a product
        $product = new Products;
        $product->title = $request->input('product_title'); 
        $product->Quantity = $request->input('Product_Qnty'); 
        $product->price = $request->input('price');  
        $product->description = $request->input('product_description');
        $product->imagePath = $fileNameToStore;
        //$product->imagePath = 'Sample';
        $product->save(); 

        return redirect('dashboard')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
