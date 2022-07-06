<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;


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
