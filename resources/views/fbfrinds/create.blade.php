@extends('app')
@section('content')
    <h1>New Fb User</h1>

    <hr>
    {!! Form::open(['url'=>'fbfrinds']) !!}
    <div class="form-group">
        {!! Form::label('fb_id','Facebook id : ')!!}
        {!! Form::text('fb_id',null,['class'=>'form-control','placeholder'=>'Enter Value'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Friend',['class'=>'btn btn-primary form-control'])!!}
    </div>
    {!! Form::close() !!}

@stop