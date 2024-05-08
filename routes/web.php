<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerAuth;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerCategory;
use App\Http\Controllers\ControllerProduct;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerImage;
use App\Http\Controllers\ControllerSlide;
use App\Http\Controllers\ControllerAccount;
use App\Http\Controllers\ControllerCart;
use App\Http\Controllers\ControllerOrder;

use App\Http\Middleware\CheckLoginAdmin;
use App\Http\Middleware\CheckLoginBuyer;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/layout', function() {
//     return view('user.layout');
// });
// Route::get('/home', function() {
//     return view('user.admin.home');
// })->name('home');
// Route::get('/management-user', function() {
//     return view('user.admin.management_user');
// });
// Route::get('/management-category', function() {
//     return view('user.admin.management_category');
// });
// Route::get('/management-product', function() {
//     return view('user.admin.management_product');
// });
// Route::get('/create-product', function() {
//     return view('product.create');
// });


// Login and register
Route::get('/Register', [ControllerUser::class, 'create'])->name('create.register');
Route::post('/Register', [ControllerUser::class, 'store'])->name('register.store');
Route::get('Login', [ControllerAuth::class, 'showLogin'])->name('showLogin');
Route::post('Login', [ControllerAuth::class, 'login'])->name('auth.login');
Route::get('/auth/google', [ControllerAuth::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [ControllerAuth::class, 'handleGoogleCallback']);
Route::get('/Logout', [ControllerAuth::class, 'logout'])->name('logout');

// Admin
Route::group(['prefix'=>'Admin'], function() {
    Route::get('management_user', [ControllerAdmin::class, 'management_user'])->name('management_user')->middleware(CheckLoginAdmin::class);
    Route::get('management_category', [ControllerAdmin::class, 'management_category'])->name('management_category')->middleware(CheckLoginAdmin::class);
    Route::get('management_product', [ControllerAdmin::class, 'management_product'])->name('management_product')->middleware(CheckLoginAdmin::class);
    Route::get('management_slide', [ControllerAdmin::class, 'management_slide'])->name('management_slide')->middleware(CheckLoginAdmin::class);
    Route::get('management_order', [ControllerAdmin::class, 'management_order'])->name('management_order')->middleware(CheckLoginAdmin::class);
});
Route::get('profile', [ControllerUser::class, 'profile'])->name('admin.profile');
Route::get('edit_profile/{id}', [ControllerUser::class, 'editprofile'])->name('edit.profile');
Route::post('update/{id}', [ControllerUser::class, 'update'])->name('update.profile');
Route::get('create_user', [ControllerUser::class, 'create_user'])->name('create_user');
Route::post('update_account_buyer/{id}', [ControllerUser::class, 'update_account_buyer'])->name('update.profile_buyer');
Route::post('delivery_order/{id}', [ControllerOrder::class, 'delivery_order'])->name('delivery.order');
Route::get('edit_account/{id}', [ControllerUser::class, 'edit_account'])->name('edit.account');
Route::post('edit_account/{id}', [ControllerUser::class, 'update_account'])->name('update.account');
Route::get('delete_account/{id}', [ControllerUser::class, 'destroy'])->name('delete.account');



//Category
Route::group(['prefix'=>'Category'], function() {
    Route::get('/create', [ControllerCategory::class, 'create'])->name('create.category');
    Route::post('/store', [ControllerCategory::class, 'store'])->name('store.category');
    Route::get('/{id}', [ControllerCategory::class, 'edit'])->name('edit.category');
    Route::post('/update/{id}', [ControllerCategory::class, 'update'])->name('update.category');
});
Route::get('delete/{id}', [ControllerCategory::class, 'destroy'])->name('delete.category');


//Product
Route::group(['prefix' =>'Product'], function() {
    Route::get('create', [ControllerProduct::class, 'create'])->name('create.product');
    Route::post('store', [ControllerProduct::class, 'store'])->name('store.product');
   
    Route::post('update/{id}', [ControllerProduct::class, 'update'])->name('update.product');
});
Route::get('edit/{id}', [ControllerProduct::class, 'edit'])->name('edit.product');
Route::get('detail/{id}', [ControllerProduct::class, 'show'])->name('product.detail');
Route::post('/update_image/{id}', [ControllerImage::class, 'update'])->name('update.image');
Route::get('search_category/{id}', [ControllerProduct::class, 'search_category'])->name('search.category');
Route::post('feedback', [ControllerProduct::class, 'feedback'])->name('product.feedback')->middleware(CheckLoginBuyer::class);
Route::post('feedback', [ControllerProduct::class, 'feedback'])->name('product.feedback')->middleware(CheckLoginBuyer::class);
Route::get('guest_search_category/{id}', [ControllerProduct::class, 'guest_search_category'])->name('guest.search.category');
Route::post('add_image/{id}', [ControllerImage::class, 'create'])->name('add.image');
Route::get('delete_image/{id}', [ControllerImage::class, 'destroy'])->name('delete.image');
Route::get('delete_product/{id}', [ControllerProduct::class, 'destroy'])->name('product.delete');




//Home
Route::get('nam', [ControllerHome::class, 'index'])->name('index.nam');
Route::get('nu', [ControllerHome::class, 'nu'])->name('index.nu');
Route::get('search', [ControllerHome::class, 'search_product'])->name('product.search');
Route::get('guest-nam', [ControllerHome::class, 'guest'])->name('guest');
Route::get('guest_search', [ControllerHome::class, 'guest_search_product'])->name('guest.product.search');
Route::get('guest-detail/{id}', [ControllerProduct::class, 'guest_show'])->name('guest.product.detail');

Route::get('slide_create', [ControllerSlide::class, 'create'])->name('slide.create');
Route::post('slide_create', [ControllerSlide::class, 'store'])->name('store.slide');
Route::get('slide_edit/{id}', [ControllerSlide::class, 'edit'])->name('edit.slide');
Route::post('slide_edit/{id}', [ControllerSlide::class, 'update'])->name('slide.update');
Route::get('home', [ControllerSlide::class, 'index'])->name('slide.index');
Route::get('', [ControllerSlide::class, 'guest_index'])->name('guest.slide.index');
Route::get('delete/{id}', [ControllerSlide::class, 'destroy'])->name('delete.slide');



Route::get('profile_buyer', [ControllerAccount::class, 'profile_buyer'])->name('profile');


Route::get('cart', [ControllerCart::class, 'index'])->name('index.cart');
Route::post('cart', [ControllerCart::class, 'store'])->name('product.cart')->middleware(CheckLoginBuyer::class);
Route::post('edit-cart/{id}', [ControllerCart::class, 'update'])->name('edit.cart');
Route::get('delete-cart/{id}', [ControllerCart::class, 'destroy'])->name('delete.cart');


Route::post('order', [ControllerOrder::class, 'store'])->name('product.order')->middleware(CheckLoginBuyer::class);
Route::get('order', [ControllerOrder::class, 'index'])->name('index.order')->middleware(CheckLoginBuyer::class);
Route::post('edit-order/{id}', [ControllerOrder::class, 'update'])->name('edit.order');
Route::get('destroy-order/{id}', [ControllerOrder::class, 'destroy'])->name('delete.order');





