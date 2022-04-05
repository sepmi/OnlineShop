<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;

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




Auth::routes();


Route::group(['prefix' => '/panel' ],function (){

    Route::resource('/categories',CategoryController::class);

    Route::resource('/products',ProductController::class)->except('index');
    Route::get('/products/{category}/showRelated',[ProductController::class,'showRelateProducts'])->name('products.showRelated');
/////
    Route::resource('/discounts',DiscountController::class)->except('show');
    Route::get('/discounts/availables',[DiscountController::class,'showAvailableDiscounts'])->name('discounts.showAvailable');
//////
    Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
    Route::patch('/users/{user}',[UserController::class,'updateInfo'])->name('users.updateInfo');

    Route::get('/users/{user}/edit/pass',[UserController::class,'editPass'])->name('users.editPass');
    Route::patch('/users/{user}/editPass',[UserController::class,'updatePass'])->name('users.updatePass');

});

Route::group(['prefix'=>'/panel' ,'middleware'=>'auth'],function(){



});


Route::get('/', [PageController::class,'homePage'])->name('index');
Route::get('/contact', [PageController::class,'contact'])->name('contact');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
