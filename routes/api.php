<?php
use App\Http\Controllers\Api\CustomerController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

route::get('/view_user',[CustomerController::class,'userlist']);
route::post('/create_user',[CustomerController::class,'createuser']);