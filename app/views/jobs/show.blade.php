@extends('layout.master')

@section('content')
    <div class="row">

    Job Type:<br>{{$job->job_type }}<br>
    Job Description:<br> {{$job->description }}<br>
    Contact Person:<br> {{$job->name}}<br>
    Email:<br> {{$job->email}}<br>
    Contact Phone No: <br>{{$job->phone}}<br>
    Contact Address: <br>{{$job->address}}
    </div>
@stop