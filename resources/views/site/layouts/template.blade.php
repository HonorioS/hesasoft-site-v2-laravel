<!doctype html>
<html lang="pt-PT">

<head>
    @include('site/includes/head')
    <title> @yield('title')</title>
</head>

<body>

    @include('site/includes/header')
    @yield('menu')
    @yield('content')

</body>

</html>
