@extends('layout.master')

@section('meta-title', 'Login')
@section('content')
<h4>Log In</h4>
{{ Form::open(['route' => 'session.store']) }}
<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::submit('Log In', ['class' => 'btn btn-primary']) }}
</div>

@if(Session::has('flash_message'))
<div class="form-group">
    <p>{{ Session::get('flash_message') }}</p>
</div>
@endif

{{ Form::close() }}
@stop