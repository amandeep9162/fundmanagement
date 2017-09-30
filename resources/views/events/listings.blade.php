@extends('layouts.mylayout');
      
              @section('content')
    <p>This is my body content.</p>

           <div class="col-md-12  row">
 
          <table class="table listingdata" >
  <tr >
    <th>id</th>
   
    <th>Type</th>
    
    <th>Status</th>
         <th colspan="2"><center>Action</center></th>
   
   
  </tr>
  <tbody>
  @foreach($dataetype as $key => $val)

    <tr >
      <td>{{$val['id']}}</td>
     
      <td>{{$val['type']}}</td>
      
      <td>{{$val['status']}}</td>
      
      
     
 <td>
      
      <a href="{{route('etype.edit',['id'=>$val['id']])}}"> Edit</a><a href="{{route('etype.delete',['id'=>$val['id']])}}"> Delete</a></td>
      
      
      <td>
       @if($val['status']==0)
       <a href="{{route('etype.enable',['id'=>$val['id']])}}"><button class="btn btn-info"> Enable</button></a>
        @elseif($val['status']==1)
      <a href="{{route('etype.disable',['id'=>$val['id']])}}"><button class="btn btn-danger"> Disable</button></a></td>
      
     

 @endif     
  

    </tr>
  @endforeach
  </tbody>
</table>
                 
           </div>  

@stop 
                      






