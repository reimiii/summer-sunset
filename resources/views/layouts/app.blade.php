<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/js/app.js'])
</head>
<body class="theme-light">
<div class="page">

    @include('layouts.header')

    @include('layouts.expand')

    <div class="page-wrapper">

        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            {{ $header ?? 'Oke'}}
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body">
            {{ $slot }}
        </div>
    </div>
</div>
</body>
</html>