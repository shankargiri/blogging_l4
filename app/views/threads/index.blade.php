@extends('layout.master')

@section('content')
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<div class="container">
<!--    {{Auth::check() ? "Welcome, ".Auth::user()->username : "why dont' you signup?" }}-->
    <div class="row">
        <div class="col-md-5 events_section">
            <div class="col-md-6">


            </div>
            <div class="col-md-6">
                @include('partials._add_events')
            </div>
        </div>
        <div class="col-md-7 recent_thread">
            <div class="col-md-9 threads_list">

<!--                @include('partials/_search_threads')-->
                {{ Form::open(['method' => 'GET']) }}
                {{ Form::input('search', 'q', null,['placeholder' => 'Search..']) }}
                {{ Form::close() }}

                <?php $tag_name_selector = array(); ?>

                @foreach($tags as $tag_name)
                <?php  $tag_name_selector[$tag_name->id] = $tag_name->name;?>
                @endforeach

                <div class="heading_section">
                    <p><strong>Recent Threads:</strong><span>
                   @include('partials/_create_thread') </span> </p>
                </div>
                <div>
<!--                    @include('partials/_search_threads')-->
                </div>
                <hr/>
                @if($threads->count())
                @foreach($threads as $thread)
                <div>
                  <img src='https://s.gravatar.com/avatar/da1c1d96e2899547d7decd0804afaa4b?s=40'>
                    <a href="{{'/threads/'.$thread->id}}" class="thread_link" >{{ $thread->topic }}</a>

                    <a target="_blank" href="{{ Share::load(Request::url(), 'check this '.$thread->topic)->facebook() }}" >
                        <i class="fa fa-lg fa-facebook btn btn-sm btn-primary"></i>
                    </a>
                    <a target="_blank" href="{{ Share::load(Request::url(), 'check this '.$thread->topic)->twitter() }}" >
                        <i class="fa fa-lg fa-twitter btn btn-sm btn-primary"></i>
                    </a>
                    <a target="_blank" href="{{ Share::load(Request::url(), 'check this '.$thread->topic)->gplus() }}" >
                        <i class="fa fa-lg fa-google-plus btn btn-sm btn-primary"></i>
                    </a>
                    <hr>
                </div>
                @endforeach
                @else
                <p>[No Results Found :( ]<br> [Try with different Query!!]</p>
                @endif
                <?php echo $threads->links(); ?>
            </div>
            <div class="col-md-3">
                <div class="heading_section">
                    <p><strong>Tags:</strong>
                    </p>
                </div>
                <hr/>
                @foreach($tags as $tag)
                <a href="{{URL::to('tag/'.$tag->id) }}" class="tag_list">{{ $tag->name }}</a><hr><br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop