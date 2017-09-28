<!DOCTYPE >
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<title>Events</title>
</head>
<style type="text/css">
  .listingdata tr td{

    border:2px solid red;
  }
   .listingdata tr th{

    border:2px solid red;
  }


</style>
<body>
       <div class="col-md-1">
       </div>
               
           <div class="col-md-10">

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
      <td>{{$val['type']}}</td>
      <td>{{$val['description']}}</td>
      <td>{{$val['video']}}</td>
      <td>{{$val['images']}}</td>
      <td>{{$val['phone']}}</td>
      <td>{{$val['address']}}</td>
      <td>{{$val['pin_code']}}</td>
      <td>{{$val['account']}}</td>
      <td>{{$val['user_id']}}</td>
      <td>{{$val['status']}}</td>
      <td><a href="{{route('edit',['id'=>$val['id']])}}"> Edit</a><a href="{{route('delete',['id'=>$val['id']])}}"> Delete</a></td>
      <td><a href="{{route('enable',['id'=>$val['id']])}}"> Enable</a><a href="{{route('disable',['id'=>$val['id']])}}"> Disable</a></td>
      
     


      

    </tr>
  @endforeach
  </tbody>
</table>
                 
           </div>  
            <div class="col-md-1"> 
           </div>            






</body>
</html>