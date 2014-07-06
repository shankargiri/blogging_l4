{{ Form::open(['method' => 'post', 'route' => 'comments.store']) }}
<!--Reply Form Input -->
<div class="form-group">
    {{ Form::label('reply', 'Reply:') }}
    {{Form::textarea('reply', null, ['class' => 'form-control']) }}
</div>
<!--Thread_id Form Input -->
{{Form::hidden('thread_id', $value=" $thread->id ", ['id' => 'thread_id'])}}
<button type="submit" class="btn btn-info">Reply</button>
{{ Form::close() }}