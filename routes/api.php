<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('users',[Usercontroller::class,'userdetails']);
Route::Post('save',[Usercontroller::class,'postusers']);
Route::PUT('update',[Usercontroller::class,'updateUser']);
Route::get('search/{char}',[Usercontroller::class,'search']);
Route::get('search',[Usercontroller::class,'search']);
Route::POST('Imageupload',[Usercontroller::class,'Imageupload']);
Route::POST('store',[Usercontroller::class,'store']);



