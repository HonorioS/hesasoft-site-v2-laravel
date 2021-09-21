<!doctype html>
<html lang="pt-PT">

<head>
    @include('site/includes/head')
    @yield('css')
</head>

<body>
    {{-- @include('site/includes/google') --}}

    {{-- @include('site/includes/header') --}}

    @yield('header')

    @yield('content')

    {{-- @include('site/includes/footer') --}}

    {{-- @include('site/includes/assets') --}}

    @yield('javascript')
</body>

</html>
