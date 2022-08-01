<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomer;

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
Route::get('/',[HomeController::class,'home'])->name('home');
//Route::get('/view-home',[HomeController::class,'view_home'])->name('home.view');
Route::get('/registration',[FrontendCustomer::class,'registration'])->name('registration');
Route::post('/do_registration',[FrontendCustomer::class,'do_registration'])->name('do-regitraton');
Route::post('/do_login',[FrontendCustomer::class,'do_login'])->name('do-login');
Route::get('/do_logout',[FrontendCustomer::class,'do_logout'])->name('logout');




Route::get('/admin/login',[MainController::class,'login'])->name('login');
Route::post('/admin/do-login',[MainController::class,'doLogin'])->name('admin.login');
Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){


    Route::get('/logout',[MainController::class,'logout'])->name('admin.logout');

    Route::get('/admin',[Maincontroller::class, 'index'])->name('admin');   
    Route::get('/dashboard',[Maincontroller::class, 'view'])->name('dashboard');




    Route::get('/product-list',[ProductController::class, 'list'])->name('product.list');
    Route::get('/product-form',[ProductController::class, 'form'])->name('product.form');
    Route::post('/product-store',[ProductController::class, 'store'])->name('product.store');

    Route::get('/category-list',[CategoryController::class, 'list'])->name('category.list');
    Route::get('/category-form',[CategoryController::class, 'form'])->name('category.form');
    Route::post('/category-store',[CategoryController::class, 'store'])->name('category.store');
    Route::get('/category-delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/category-view/{id}',[CategoryController::class, 'view'])->name('category.view');
    Route::get('/category-edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category-update/{id}',[CategoryController::class, 'update'])->name('category.update');


    Route::get('/brand/list',[BrandController::class, 'list'])->name('brand.list');
    Route::get('/brand/form',[BrandController::class, 'form'])->name('brand.form');
    Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');


    Route::get('/customer-list',[CustomerController::class, 'list'])->name('customer.list');
});