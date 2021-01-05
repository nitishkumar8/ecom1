<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
   
	Route::get('/', function (){
		return view('header');
	});
    route::get('login',function(){
      return view('login');
    });

    route::view('header1','header');

	               

    // Route::POST('Postlogin',[LoginController::class,'Postlogin']);
    
	// Route::get('invoice',[Usercontroller::class,'show']);
	//Route::get('users',[Usercontroller::class,'show'];
