@extends('layout.master')

@section('content')
    {{ Form::open(['route' => 'jobs.store']) }}
    <div class="form-group">
        {{ Form::label('jobtype', 'Job Type*::') }}
        {{ Form::text('jobtype', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('title', 'Title*:') }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Description:') }}
        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('name', 'Contact Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email*:') }}
        {{ Form::email('email', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('phone', 'Phone Number:') }}
        {{ Form::text('phone', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Address:') }}
        {{ Form::text('address', null, ['class' => 'form-control']) }}
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    {{ Form::open() }}

@stop
