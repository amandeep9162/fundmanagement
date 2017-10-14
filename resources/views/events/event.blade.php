@extends('layouts.mylayout');
      
              @section('content')

<div class="col-md-4">
</div>
       
             <div class="col-md-4">
             @if(Session::has('success'))
      <center> <p style="color:green; font-weight:bold;">{{Session::get('success')}}</p></center>
       @endif 
                         <center><h2 style="color:red;font-weight:bold;">ADD EVENT</h2></center>
                       {!!  Form::open(['route'=>'create.event', 'method'=>'post', 'files'=>'true']) !!}
                       {!! Form::label ('Name') !!}
                       {!! Form::text('name',null,['class'=>'form-control'])  !!}<br>
                       @if ($errors->has('name'))

                  <span class="text-danger">{{ $errors->first('name') }}</span><br>

                @endif
                        {!! Form::label ('Title') !!}
                       {!! Form::text('title',null,['class'=>'form-control'])  !!}<br>
                       @if ($errors->has('title'))

                  <span class="text-danger">{{ $errors->first('title') }}</span><br>

                @endif
                        {!! Form::label('select', 'Type', ['class' => 'control-label'] )  !!}
                       {!! Form::select('type',$data_type,null,['class'=>'form-control' ])  !!}<br>
                       @if ($errors->has('type'))

                  <span class="text-danger">{{ $errors->first('type') }}</span><br>

                @endif
                       {!! Form::label('Description' )  !!}
                       {!! Form::text('description',null,['class'=>'form-control'])  !!}<br>
                       @if ($errors->has('description'))

                  <span class="text-danger">{{ $errors->first('description') }}</span><br>

                @endif
                        {!! Form::label('Upload Video' )  !!}
                       {!! Form::file('video',['class'=>'form-control'])  !!}<br>                        {!! Form::label('Images' )  !!}
                       {!! Form::file('images',['class'=>'form-control'])  !!}<br>
                        {!! Form::label('Mobile' )  !!}
                       {!! Form::number('phone',null,['class'=>'form-control'])  !!}<br>
                       @if ($errors->has('phone'))

                  <span class="text-danger">{{ $errors->first('phone') }}</span><br>

                @endif
                        {!! Form::label('Address' )  !!}
                       {!! Form::text('address',null,['class'=>'form-control'])  !!}<br>
                       @if ($errors->has('address'))

                  <span class="text-danger">{{ $errors->first('address') }}</span><br>

                @endif
                        {!! Form::label('Pin-Code' )  !!}
                       {!! Form::text('pin_code',null,['class'=>'form-control'])  !!}<br>
                        @if ($errors->has('pin_code'))

                  <span class="text-danger">{{ $errors->first('pin_code') }}</span><br>

                @endif

                        {!! Form::label('Account No.' )  !!}
                       {!! Form::text('account',null,['class'=>'form-control'])  !!}<br>
                        @if ($errors->has('account'))

                  <span class="text-danger">{{ $errors->first('account') }}</span><br>

                @endif
                        {!! Form::label('Amount' )  !!}
                       {!! Form::number('amount',null,['class'=>'form-control'])  !!}<br>
                        @if ($errors->has('amount'))

                  <span class="text-danger">{{ $errors->first('amount') }}</span><br>

                @endif
                        {!! Form::label('User-Id' )  !!}
                        {!! Form::text('user_id',null,['class'=>'form-control'])  !!}<br>
                        
                       {!! Form::submit('click me',['class'=>'btn btn-primary'])  !!}

                      

                       {!! Form::close() !!}
             </div>       
           <div class="col-md-4">

         
                 
           </div>            






@stop