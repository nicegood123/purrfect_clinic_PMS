<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.partials.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        @include('layouts.partials.navbar')
        @include('layouts.partials.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('layouts.partials.footer')
    </div>

    @yield('modals')
    @include('layouts.partials.script')
    @yield('scripts')
</body>

</html>
