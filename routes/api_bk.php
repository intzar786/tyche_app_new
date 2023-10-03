<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\BannerController;

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

## Login And Register

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

## My profile And Edit Profile

Route::post('/profile',[AuthController::class,'profile']);
Route::post('/update_profile',[AuthController::class,'update_profile']);
Route::post('/forget_password',[AuthController::class,'forget_pass']);
//Route::post('/reset_password',[AuthController::class,'reset_password']);


## Banner And Add Banner
Route::post('/add_banner',[AuthController::class,'add_banner']);
Route::get('/show_banner',[AuthController::class,'show_banner']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/logout',[AuthController::class,'logout']);
Route::post('/change_password',[AuthController::class,'reset_password']);

