<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\eventtype;
use Session;

class EventController extends Controller
{
          public function listing() {
                   $data=null;
                   $alldata=Event::with('event_type_rel')->get();
                   dump($alldata->toArray());
                   return view('events.listing',['data'=>$alldata]);
        

         }
          public function create(Request $request){
      	 
      		 // dump($request->all());
           	if($request->isMethod('post')){


                  $request->validate([
                      'name' => 'required',
                      'title' =>'required',
                      'description' =>'required',
                      'phone' =>'required',
                      'address' =>'required',
            ]);
                  $imageName = time().'.'.$request->images->getClientOriginalExtension();
                  $request->images->move(public_path('images'), $imageName);
                	$event = new Event();
                	$event->fill($request->except('images'));
                  $event->images = $imageName;
                	$event->save();

          		
                  Session::flash('success',' Event successfully created.');
                  return back(); 
          		
          	}
                 $type_data = eventtype::pluck('type','id');
          	     return view('events.event',['data_type'=>$type_data]);

            }

            public function edit($id) {
             
                  $edit = Event::find($id);
                 
                  $type_data = eventtype::pluck('type','id');
                  return view('events/edit',['edit'=>$edit , 'data_type'=>$type_data]);
           }

            public function update(Request $request) {
                   // dd($request->all());
                   Event::where('id',$request['id'])->update($request->except('_token'));
                   return redirect()->route('events.listing');

            }

            public function delete($id) {
                   Event::where('id',$id)->delete($id);
                   return back();

            }

            public function enable($id) {
                   
                   Event::where('id',$id)->update(['status'=>1]);
                   return back();

            }
            public function disable($id) {
                   
                   Event::where('id',$id)->update(['status'=>0]);
                   return back();

            }

            public function sidebar() {
                   
                   
                   return view('events.sidebar');

            }






}
