{{ Form::open(['method' => 'GET']) }}
    {{ Form::input('search', 'q', null,['placeholder' => 'Search..']) }}
{{ Form::close() }}