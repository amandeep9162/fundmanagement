<!DOCTYPE >
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<title>Events</title>
</head>
<body>
       <div class="col-md-4">
       </div>
             <div class="col-md-4"> 
                         <center><h2 style="color:red;font-weight:bold;">ADD EVENT</h2></center>
                       {!!  Form::open(['route'=>'event.type', 'method'=>'post']) !!}
                       {!! Form::label ('Name') !!}
                       {!! Form::text('name',null,['class'=>'form-control'])  !!}<br>
                        {!! Form::label ('Title') !!}
                       {!! Form::text('title',null,['class'=>'form-control'])  !!}<br>
                        {!! Form::label('select', 'Type', ['class' => 'control-label'] )  !!}
                       {!! Form::select('type', ['L' => 'Large', 'S' => 'Small'],null,['class'=>'form-control' ])  !!}<br>
                       {!! Form::label('Description' )  !!}
                       {!! Form::text('description',null,['class'=>'form-control'])  !!}<br>
                        {!! Form::label('Upload Video' )  !!}
                       {!! Form::file('video',['class'=>'form-control'])  !!}<br>
                        {!! Form::label('Images' )  !!}
                       {!! Form::file('images',['class'=>'form-control'])  !!}<br>
                        {!! Form::label('Mobile' )  !!}
                       {!! Form::number('phone',null,['class'=>'form-control'])  !!}<br>
                        {!! Form::label('Address' )  !!}
                       {!! Form::text('address',null,['class'=>'form-control'])  !!}<br>
                        {!! Form::label('Pin-Code' )  !!}
                       {!! Form::text('pin_code',null,['class'=>'form-control'])  !!}<br>
                        {!! Form::label('Account No.' )  !!}
                       {!! Form::text('account',null,['class'=>'form-control'])  !!}<br>
                        {!! Form::label('Amount' )  !!}
                       {!! Form::number('amount',null,['class'=>'form-control'])  !!}<br>
                        {!! Form::label('User-Id' )  !!}
                        {!! Form::text('user_id',null,['class'=>'form-control'])  !!}<br>
                       {!! Form::submit('click me',['class'=>'btn btn-primary'])  !!}

                      

                       {!! Form::close() !!}
             </div>       
           <div class="col-md-4">
                 
           </div>            






</body>
</html>