<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('admin', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('honut');
});


Route::get('shop/index', 'HonutController@honut_products')->name('home');
Route::get('about/index', 'HonutController@about')->name('home');
Route::get('contact/index', 'HonutController@contact')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/post_sale', 'ProductsController@add_sale');

Route::get('/shop', 'HomeController@shop')->name('home');

Route::get('/contact', 'HomeController@contact')->name('home');

Route::get('/dashboard', 'HomeController@dashboard')->name('home');

Route::get('/add_products', 'ProductsController@create')->name('home');

Route::get('/add_sale', 'HomeController@dashboard')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::resource('products', 'ProductsController');



// Route::get('add_products', function () {
//     return view('add_products');
// });



// Route::get('logout', function(){

//     return back();

// });

// Route::post('logout', 'AuthController@logout');



