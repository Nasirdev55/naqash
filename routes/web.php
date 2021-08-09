<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('site')->group(function(){

    Route::get('/',[AuthenticationController::class,'view'])->name('view');
    Route::get('/detail/{product_id}',[ProductController::class,'detailsProduct'])->name('detailsProduct');
    Route::get('about-us',[\App\Http\Controllers\ProductController::class,'aboutUs'])->name('aboutUs');
    Route::get('contact',[\App\Http\Controllers\ProductController::class,'contact'])->name('contact');
    Route::get('faq',[\App\Http\Controllers\ProductController::class,'faq'])->name('faq');
    Route::get('shop',[\App\Http\Controllers\ShopController::class,'shop'])->name('shop');
    Route::get('live_search/action',[\App\Http\Controllers\ShopController::class,'action'])->name('live_search.action');
    Route::get('category/{id}',[\App\Http\Controllers\ShopController::class,'category'])->name('category');
//    Route::get('/', function (){
//        return view('site/layouts/slider');
//    });

    Route::get('/login', function (){
        return view('site/auth/login');
    });

    //Authentications
    Route::post('/login', [\App\Http\Controllers\AuthenticationController::class, 'login'])->name('site-login');
    Route::post('/register', [\App\Http\Controllers\AuthenticationController::class, 'register'])->name('site-register');
    Route::post('/logout', [\App\Http\Controllers\AuthenticationController::class, 'logout'])->name('site-logout');


});

//Route::middleware('user')->group(function(){
//
//}
