@extends('layouts.mylayout');
      
              @section('content')
{!!  Form::Model($delete,['route'=>'create.event', 'method'=>'post', 'files'=>'true']) !!}
                       {!! Form::label ('Name') !!}
                       {!! Form::text('name',null,['class'=>'form-control'])  !!}<br>
                        {!! Form::label ('Title') !!}
                       {!! Form::text('title',null,['class'=>'form-control'])  !!}<br>
                       
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
@stop