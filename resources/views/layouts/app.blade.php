@include('layouts.header')
    <div id="app">
        @include('_includes.nav.main')
        @yield('content')
    </div>
@include('layouts.footer')