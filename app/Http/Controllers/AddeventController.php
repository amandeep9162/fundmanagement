<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddeventController extends Controller
{
    public function create(Request $request){
    	dump(1234);
			dump($request->all());
    	if($request->isMethod('post')){
    		echo '123'.$request['title'];

    		$etypeslt=select('data'=>$etypeslt)->all();
    		dump($etypeslt);
    		
    	}
    	return view('events.addevent');
    }
     



}
