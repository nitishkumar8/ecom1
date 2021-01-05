<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\UrlGenerator;
use Storage;
use validation;
//use App\models\invoice;
//use App\models\invoice;
use App\models\user;
use App\models\userdetails;

class Usercontroller extends Controller
{
	
	
	public function userdetails()
	{
		//return ["name"=>"chemist","mobile"=>"9269689220"];
		  return userdetails::where('name','nitish')->get();
		//print_r();
	}	 
	public function postusers(Request $req)
    {
	  $user       = new userdetails;
      $user->name = $req->name;  
	  $user->save();
	  	 
	}	 
	 public function updateUser(Request $request)
	 {
		//print_r($request->input('id'));
		//$time_start  = microtime(true);
	    $user        = userdetails::find($request->input('id'));		
		$user->name  = 'nitish';
		$result=$user->save();
	    if($result)
	    {
		  return ["result"=>"data is updated"];
	    }else
	    {
		  return ["result"=>"data is not updated"];
		}		 
		 
         // Anywhere else in the script
         //echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);
		
	 }
	 
	  public function search($char=null)
	  {
		
		$data= ($char!='')?userdetails::where("name",'like','%'.$char.'%')->get():userdetails::all(); 
		//return $data= ($char!='') ? 'yes':'no';		
		$arraycount = sizeof($data);		
		if($arraycount!='')
		{
			return $data;
		}else{
			return 'record is not found';
		}
      } 	  
	  
	  public function Imageupload(Request $req)
	  {
		 $file  = $req->file('image')->store('apidocs');
		 return ["result" =>$file];
	  }
	  
	 public function store(Request $req)
	 {
		 $array = array();
	 }
	 
	 public function show()
	 {
	   //return view('index');
	  // echo url()->current();
	  // echo url()->full();
	  // echo url()->previous();
	 // return invoice::all();
	    
		return $file= invoice::orderBy('date', 'desc')->paginate(1);
	     
		//$users =  DB::table('invoice_image')->select('invoice_image')->get();		 
		//$my_array_data  = json_decode($users, TRUE);
		  
	  
	    // $i=1;
         // foreach($file as $singleFile){
         //$original_name       =  (trim($singleFile->getClientOriginalName()));
         //$file_name           =  time().rand(100,999).$i.$original_name;
         // $file_name          =  time().rand(100,999);
         // $users->storeAs('invoice',$file_name);        //storage folder
       
        // }
		// $i++;
	 }
	
	  public function upload_image(Request $request)
	  {
		//echo $req;
		//return $request->file('image')->store('nitish');
		 $fileArray       = array();
		 $destinationPath = 'uploads';
         $file            = $request->file('image');
		 
		 /* 
		 $i=1;
         foreach($file as $singleFile){
         $original_name   =   (trim($singleFile->getClientOriginalName()));
         $file_name       =   time().rand(100,999).$i.$original_name;
         $singleFile->storeAs('product',$file_name);        //storage folder
         $fileArray[]     =  $file_name;
		 $user            =  DB::table('users')->insertGetId([
		 'image' =>  url()->current()."/".$file_name,
		 ]);
        }
		$i++;
		
		
		if($user>0)
		{
			echo "Successfully Insert";
		}else
		{
			echo "Error,Please try again";
		} */
         //print_r($fileArray);
	  }
     }
