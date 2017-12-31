@include('layouts.header')
    <div id="app">
        @include('_includes.nav.main')

        @include('_includes.nav.manage');

        @yield('content')
    </div>
@include('layouts.footer')