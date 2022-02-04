<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('assets.styles')
</head>
<body class="layout-fixed">


    <div class="wrapper"  id="app">

        <div class="content-wrapper">
            @include('important.navbar')

            @include('important.sidebar')
            <section class="content">

                @yield('content')

            </section>
        </div>
    </div>

    @include('assets.scripts')

</body>
