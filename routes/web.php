<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\BrandController;


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

Route::get('/',[Maincontroller::class, 'master']);
Route::get('/dashboard',[Maincontroller::class, 'view'])->name('dashboard');



Route::get('/product-list',[ProductController::class, 'list'])->name('product.list');
Route::get('/product-form',[ProductController::class, 'form'])->name('product.form');
Route::post('/product-store',[ProductController::class, 'store'])->name('product.store');

Route::get('/category-list',[CategoryController::class, 'list'])->name('category.list');
Route::get('/category-form',[CategoryController::class, 'form'])->name('category.form');
Route::post('/category-store',[CategoryController::class, 'store'])->name('category.store');
Route::get('/category-delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');
Route::get('/category-view/{id}',[CategoryController::class, 'view'])->name('category.view');

Route::get('/brand/list',[BrandController::class, 'list'])->name('brand.list');
Route::get('/brand/form',[BrandController::class, 'form'])->name('brand.form');
Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');


Route::get('/customer-list',[CustomerController::class, 'list'])->name('customer.list');
