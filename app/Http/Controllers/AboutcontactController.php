<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutcontactController extends Controller
{
    public function aboutus(){
    	return view('events.aboutus');
    }
}
