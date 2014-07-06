@extends('layout.master')

@section('content')
<h4>Register!</h4>
{{ Form::open(['route' => 'register.store']) }}
<div class="form-group">
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) }}

</div>
<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}

</div>
<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}

</div>
<div class="form-group">
    {{ Form::label('password_confirmation', 'Password-Confirmation:') }}
    {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::submit('Create Account', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
@stop