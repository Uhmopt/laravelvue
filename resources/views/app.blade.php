<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="general-body">
<div id="app">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-10 content">
                @include('layouts.error')
                @yield('content')
            </div>
        </div>
    </div>

    <hr/>
</div>

<footer class="footer">
    <p class="text-center">Created by @rion^_^</p>
</footer>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>