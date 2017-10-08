<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\person;

class personController extends Controller
{
   public function index()
   {

   $persons=person::all();
   return response()->json([
    'persons'=>$persons
   ]);

   }

   	public function createperson(Request $request)
	{
		
		$explode=explode(',', $request->image);
		$decode=base64_decode($explode[1]);
		if(str_contains($explode[0],'jpeg'))
			$exten='jpeg';
		else
			$exten='png';

		$filename=str_random().'.'.$exten;
		$path=public_path().'/images/'.$filename;
		file_put_contents($path,$decode);

	 
	 $persons=person::create(array(
	 	'name'=>$request->get('name'),
	 	'email'=>$request->get('email'),
	 	'phoneno'=>$request->get('phoneno'),
	 	'dob'=>$request->get('dob'),
	 	'gender'=>$request->get('gender'),
	 	'bio'=>$request->get('bio'),
	 	'image'=>$filename
	 ));

         if($persons)
         {
         	return response()->json([
    'message'=>$persons
   ]);

         }
         

	}
}
