@extends('layout.master')

@section('content')

    @foreach($jobs as $job)
    <div class="row">
        <div class="col-md-8">
            <a href="{{'job/'.$job->id }}">{{ $job->title }}<br>
            {{ $job->description }}</a> <br><br>
        </div>
    </div>
    @endforeach

@stop