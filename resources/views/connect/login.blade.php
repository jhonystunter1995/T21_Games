@extends('connect.master')
@section('title', 'login')

@section('content')
  <div class="box box_login shadow">
    {!! Form::open(['url' => '/login']) !!}
    <label for="email">Correo Electrónico:</label>
    <div class="input-group">
      <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope-open-text"></i></div>
      </div>
      {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <label for="email" class="jump1">Contraseña:</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fas fa-key"></i></div>
    </div>
      {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Ingresar', ['class' => 'btn btn-primary jump1']) !!}
    {!! Form::close() !!}
  </div>
@stop
