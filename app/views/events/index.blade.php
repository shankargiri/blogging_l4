@extends('layout.master')

@section('content')

    <div class="container">
        <div class="row">
            <h2><strong>Upcoming Events!</strong></h2>
            @foreach($events as $event)
            <div class="col-md-4 event_list">
                <strong style="color: #ffffff"><bold>{{ $event->event }}</bold></strong><br>
                <strong><a href="<?php echo 'https://www.google.com.au/maps/preview/?q='.$event->venue?>" target="_blank"  style="color: red;">{{$event->venue}}</a></strong><br>
                {{ $event->address }}<br>
                <a href="<?php echo 'https://www.google.com.au/maps/preview/?q='. '1 dalveen rd' . '+' .'+'.$event->zip. '+'.$event->venue?>" target="_blank">{{ $event->zip }}</a><br>
                {{ $event->date }}
            </div>
            @endforeach
        </div>
    </div>

@stop