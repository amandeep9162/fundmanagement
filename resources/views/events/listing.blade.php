@extends('layouts.mylayout');
      
              @section('content')
      
               
           <div class="col-md-12  row">

          <table class="table listingdata" >
  <tr >
    <th>id</th>
    <th>Name</th>
    <th>Title</th>
    <th>Type</th>
    <th>Description</th>
    <th>Video</th>
    <th>Images</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Pincode</th>
    <th>Account</th>
    <th>User Id</th>
    <th>Status</th>
         <th colspan="2"><center>Action</center></th>
   
   
  </tr>
  <tbody>
  @foreach($data as $key => $val)

    <tr >
      <td>{{$val['id']}}</td>
      <td>{{$val['name']}}</td>
      <td>{{$val['title']}}</td>
      <td>
      {{$val['event_type_rel']['type']}}</td>
      <td>{{$val['description']}}</td>
      <td>{{$val['video']}}</td>
      <td>{{$val['images']}}</td>
      <td>{{$val['phone']}}</td>
      <td>{{$val['address']}}</td>
      <td>{{$val['pin_code']}}</td>
      <td>{{$val['account']}}</td>
      <td>{{$val['user_id']}}</td>
      <td>{{$val['status']}}</td>
      <td>
      
      <a href="{{route('edit',['id'=>$val['id']])}}"> Edit</a><a href="{{route('delete',['id'=>$val['id']])}}"> Delete</a></td>
      
      
      <td>
       @if($val['status']==0)
       <a href="{{route('event.enable',['id'=>$val['id']])}}"><button class="btn btn-info"> Enable</button></a>
        @elseif($val['status']==1)
      <a href="{{route('event.disable',['id'=>$val['id']])}}"><button class="btn btn-danger"> Disable</button></a></td>
      
     

 @endif     

    </tr>
  @endforeach
  </tbody>
</table>
                 
           </div>  
                      





@stop