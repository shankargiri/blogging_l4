@extends('layout.master')

@section('content')
    @foreach($threads as $thread)
<a href="{{'/threads/'.$thread->id}}" class="thread_link" >{{ $thread->topic }}</a> <hr></br>
     @endforeach
@stop