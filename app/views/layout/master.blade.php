@include('layout.header')
<br>
<div class="container">
    @if(Session::has('message'))
        <p class="alert">{{ Session::flash('message') }}</p>
    @endif
    @yield('content')
</div>

@include('layout.footer')
