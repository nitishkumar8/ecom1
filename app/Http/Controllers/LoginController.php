<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\myguests;

class LoginController extends Controller
{
	public function Postlogin(Request $req)
	{
	   $Username  = $req->username;
	   $password  = $req->pass;
	  return myguest::all();
	}
    
}
