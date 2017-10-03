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
  .navbar12 {
      width: 250px;
      height: 350px;
       background-color: #f2ffbf;   
        margin: 70px 0 0 0;
        border-radius: 10%;
        border:2px solid #982b2b;

  }
  .navbar12 ul li{
   
padding: 20px;
    font-weight: bold;
    border-bottom: 2px solid red;

    text-decoration: none;
    list-style: none;
   
    
  }
  .navbar12 a{
      text-decoration: none;
       
    


  }
</style>
<body>

<div class="container-fluid">
    <div class="col-md-3">
        <div class="navbar12" >
  
            <ul>
                 <li><a href="{{route('create.event')}}">EVENTS</a></li>
                 <li><a href="{{route('events.listing')}}">EVENT LISTING</a></li>
                 <li><a href="{{route('event.type')}}">TYPE</a></li>
                 <li><a href="{{route('eventtype.listings')}}">TYPE LISTING</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        @yield('content')
     </div>
             
</div>


</body>
</html>