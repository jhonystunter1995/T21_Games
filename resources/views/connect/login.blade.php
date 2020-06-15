@extends('connect.master')
@section('title', 'login')

@section('content')
  <div class="box">
    {!! Form::open(['url' => '/login']) !!}
    <div class="input-group">
      <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope-open-text"></i></div>
      </div>
      {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::close() !!}
  </div>
@stop
