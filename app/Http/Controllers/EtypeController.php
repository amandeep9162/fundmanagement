<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\eventtype;
use Session;

class EtypeController extends Controller
{
    public function listing() {
                   $dataetype=null;
                   $alldataetype=eventtype::all();
                   return view('events.listings',['dataetype'=>$alldataetype]);
        

         }
      public function createtypes(Request $request){

         if ($request->isMethod('post')) {
           $request->validate([
                      'type' => 'required',
                       ]);
         	$etype= new eventtype();
         	$etype->fill($request->all());
         	$etype->save();
         	 Session::flash('success',' Event successfully created.');
                  return back(); 
         	
         }

         return view('events.eventtype');




       $type_data = eventtype::pluck('type','id');
          	     return view('events.event',['data_type'=>$type_data]);

      }
       public function edit($id) {
                  $edit = eventtype::find($id);
                 
                 
                  return view('events/etypeedit',['edit'=>$edit]);
           }

            public function update(Request $request) {
                   // dd($request->all());
                   eventtype::where('id',$request['id'])->update($request->except('_token'));
                   return redirect()->route('eventtype.listings');

            }

            public function delete($id) {
                   eventtype::where('id',$id)->delete($id);
                   return back();
            }

            public function enable($id) {
                   eventtype::where('id',$id)->update(['status'=>1]);
                   return back();

            }
            public function disable($id) {
                   eventtype::where('id',$id)->update(['status'=>0]);
                   return back();
            }



}
