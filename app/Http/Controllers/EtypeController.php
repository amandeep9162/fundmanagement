<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\eventtype;

class EtypeController extends Controller
{
   
      public function createtypes(Request $request){

         if ($request->isMethod('post')) {

         	$etype= new eventtype();
         	$etype->fill($request->all());
         	$etype->save();
         	
         }

         return view('events.eventtype');






      }


}
