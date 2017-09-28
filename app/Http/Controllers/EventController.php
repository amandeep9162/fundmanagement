<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\eventtype;

class EventController extends Controller
{
    public function listing() {
         $data=null;
    $alldata=Event::all();
   return view('events.listing',['data'=>$alldata]);
  

   }



   public function create(Request $request){
    	 dump($request);
		 // dump($request->all());
    	if($request->isMethod('post')){
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('images'), $imageName);
    	$event = new Event();

    	$event->fill($request->except('images'));
        $event->images = $imageName;
    	$event->save();
    		
            return redirect()->route('events.listing');
    		
    	}



       
         

         $type_data = eventtype::pluck('type','id');
    	return view('events.event',['data_type'=>$type_data]);

    }

     public function edit($id) {
        dump($id);
            $edit = Event::find($id);
            dump($edit->toArray());
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
             
             Event::where('id',$request['id'])->update('status'==0);
        return back();

      }
       public function disable($id) {
             
             Event::where('id',$request['id'])->update('status'==1);

                     return back();

      }





}
