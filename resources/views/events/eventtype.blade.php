@extends('layouts.mylayout');
      
              @section('content')

     <div class="col-md-4">
     </div>
     <div class="col-md-4"> 
      @if(Session::has('success'))
      <center> <p style="color:green; font-weight:bold;">{{Session::get('success')}}</p></center>
       @endif 

   {!!  Form::open(['route'=>'event.type', 'method'=>'post']) !!}
    {!! Form::label ('Type') !!}
   {!!Form::text('type',null,['class'=>'form-control']) !!}<br>
     @if ($errors->has('type'))

                  <span class="text-danger">{{ $errors->first('type') }}</span><br>

                @endif
       {!! Form::submit('click me',['class'=>'btn btn-primary'])  !!}

        </div>
        <div class="col-md-4">
        </div>




@stop