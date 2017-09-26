<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;

class EventController extends Controller
{
    
   public function create(Request $request){
    	// dump(1234);
		 // dump($request->all());
    	if($request->isMethod('post')){
    	$event = new Event();
    	$event->fill($request->all());
    	$event->save();
    		echo '123'.$request['title'];
    		
    	}
    	return view('events.event');

    }




}
