<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" sizes="16x16 32x32" type="image/png">

    <!--start bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <!--end bootstrap-->
    <!--start fontawesome-->
    <link rel="stylesheet" href="{{ asset('css/fontawesome/all.css') }}">
    <!--end fontawesome-->
    <!-- select 2 -->
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet"/>
    <!-- select 2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/clientProfile.css') }}">
    @stack('stylesheet')
</head>
@php
    $route = Route::currentRouteName();
@endphp
<body>
@include('client.partials.header')

@yield('content')

<input type="hidden" id="base_url" value="{{ url('') }}">
<!--start scripts-->
<script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>

<!-- select 2 -->
<script src="{{ asset('js/select2.min.js') }}"></script>
<!-- select 2 -->
<!-- fontawesome -->
<script src="{{ asset('translators/js/fontawesome/all.js') }}"></script>
<!-- fontawesome -->
@stack('javascript')
<!--end scripts-->
</body>
</html>
