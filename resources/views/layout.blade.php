<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include("links.style")
</head>
<body>
    <nav>@include('components.header')</nav>
    @yield('container')


    <footer>@include('components.footer')</footer>
        @include("links.script")
</body>
</html>
