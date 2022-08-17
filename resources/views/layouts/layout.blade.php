<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.header.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        @include('layouts.navbar.navbar')
        @include('layouts.sidebar.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('layouts.footer.footer')
    </div>

    @yield('modals')
    @include('layouts.scripts.script')
    @yield('scripts')
</body>

</html>
