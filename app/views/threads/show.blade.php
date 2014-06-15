@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div style="background: gray; font-size: 18px; text-align: center; color: #000000; margin-top: 5px; width: 8%;">
<!--                {{Auth::check() ? Auth::user()->username : "why dont' you signup?" }}-->

            </div>
            <br>
            <img src='https://s.gravatar.com/avatar/da1c1d96e2899547d7decd0804afaa4b?s=40'>&nbsp
            <strong style="font-size: 24px; font-weight: bold;font-family: cosmic;">{{$thread->user->username }}</strong> <br>
            <hr/>
            {{$thread->topic }}
            <div class="pull-right">
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this '.$thread->topic)->twitter() }}" >
                <i class="fa fa-lg fa-twitter btn btn-sm btn-primary"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this '.$thread->topic)->facebook() }}" >
                <i class="fa fa-lg fa-facebook btn btn-sm btn-primary"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this '.$thread->topic)->gplus() }}" >
                <i class="fa fa-lg fa-google-plus btn btn-sm btn-primary"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this '.$thread->topic)->linkedin() }}" >
                <i class="fa fa-lg fa-linkedin btn btn-sm btn-primary"></i>
            </a>
            </div>
            <hr/>
            <h2>Comments:</h2>
            @foreach($comments as $comment)
                {{ $comment->reply }}<br>
            @endforeach
            @include('partials/_reply_thread')
        </div>
    </div>
</div>
@stop