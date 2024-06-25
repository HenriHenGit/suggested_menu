<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="color-theme-deeporange">
    <div class="preloader"></div>
    <div class="main-wrap min-vh-100">
        @yield('content')
    </div>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
