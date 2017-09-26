<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

	<title>Events Types</title>
</head>
<body>

     <div class="col-md-4">
     </div>
     <div class="col-md-4"> 

   {!!  Form::open(['route'=>'event.type', 'method'=>'post']) !!}
    {!! Form::label ('Type') !!}
   {!!Form::text('type',null,['class'=>'form-control']) !!}<br>
    {!! Form::label ('Status') !!}
   {!!Form::text('status',null,['class'=>'form-control']) !!}<br>
    {!! Form::submit('click me',['class'=>'btn btn-primary'])  !!}

        </div>
        <div class="col-md-4">
        </div>




</body>
</html>