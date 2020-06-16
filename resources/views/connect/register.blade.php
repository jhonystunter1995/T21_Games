@extends('connect.master')
@section('title', 'Crear cuenta')

@section('content')
  <div class="box box_register shadow">
    <div class="header">
      <a href="{{ url('/') }}">
        <img src="{{ url('/static/images/logo.png') }}">
      </a>
    </div>
    <div class="inside">
      {!! Form::open(['url' => '/register']) !!}

      <label for="name">Nombre:</label>
      <div class="input-group">
      <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user-edit"></i></div>
      </div>
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
      </div>

      <label for="lastname" class="jump1">Apellido:</label>
      <div class="input-group">
      <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user-plus"></i></div>
      </div>
        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
      </div>

      <label for="email" class="jump1">Correo Electrónico:</label>
      <div class="input-group">
      <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope-open-text"></i></div>
      </div>
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
      </div>

    <label for="password" class="jump1">Contraseña:</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fas fa-key"></i></div>
    </div>
      {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <label for="cpassword" class="jump1">Confirmar Contraseña:</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fas fa-key"></i></div>
    </div>
      {!! Form::password('cpassword', ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Crear cuenta', ['class' => 'btn btn-primary jump1']) !!}
    {!! Form::close() !!}

    <div class="rfooter jump1">
      <a href="{{ url('/login') }}">Iniciar con una cuenta</a>
    </div>
    </div>
  </div>
@stop
