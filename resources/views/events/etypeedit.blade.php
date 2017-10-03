@extends('layouts.mylayout');
      
              @section('content')

   <div class="col-md-2">

    </div>
          <div class="col-md-8"> 
{!!  Form::model($edit,['route'=>'update.eventtype', 'method'=>'post', 'files'=>'true']) !!}

                       {!! Form::hidden('id') !!}
                       
                       {!! Form::label ('Type') !!}
                       {!!Form::text('type',null,['class'=>'form-control']) !!}<br>
                       {!! Form::submit('click me',['class'=>'btn btn-primary'])  !!}

                      

                       {!! Form::close() !!}
         </div>

            <div class="col-md-2">

    </div>           
@stop