<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 and Vue 3 CRUD Application - LaravelTuts.com</title>

    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap')

    </style>
</head>
{{-- @include('admin.layouts.head')  --}}
<body class="sb-nav-fixed">
    {{-- @include('admin.layouts.header')  --}}
    <div id="layoutSidenav">
        @include('admin.layouts.sidebar')
        <div id="layoutSidenav_content">
            <main>
                {{-- @yield('content')  --}}
                <div id="app"></div>
            </main>
            {{-- @include('admin.layouts.footer')  --}}
        </div>
    </div>
    {{-- @include('admin.layouts.scripts')  --}}
</body>
<script>
    var currentpath = window.location.pathname.split('/')[1];
    $('#' + currentpath).addClass('active');
</script>
</html>
