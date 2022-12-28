<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @stack('head')

    <title>SS | {{ $title ?? config('app.name') }}</title>

{{--    ico from https://www.favicon.cc/ --}}
    <link rel="shortcut icon" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/yeahh.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/yeahh.ico') }}" type="image/x-icon">

    @vite(['resources/js/app.js'])
</head>
<body class="theme-light">
<div class="page">

    @include('layouts.header')

    @include('layouts.expand')

    <div class="page-wrapper">

        <x-header :title="$header" />

        <div class="page-body">
            <div class="container-xl">
                {{ $slot }}
            </div>
        </div>

        @include('layouts.footer')

    </div>
</div>

@stack('scripts')
</body>
</html>
