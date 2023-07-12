<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="{{ asset('fonts.googleapis.com/css36e9.css?family=Poppins:200,300,400,600,700,800') }}"
        rel="stylesheet" />
    <link href="{{ asset('use.fontawesome.com/releases/v5.0.6/css/all.css') }}" rel="stylesheet">

    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/blk-design-system-pro.mine209.css?v=1.0.0') }}" rel="stylesheet" />

    <link href="{{ asset('demo/demo.css') }}" rel="stylesheet" />



</head>

<body class="login-page" style="background-color: #171941 !important; background-image: url('/img/dots.png'); background-size: contain;">
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>


</body>

</html>
