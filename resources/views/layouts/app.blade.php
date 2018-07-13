<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">
</head>
<body>

<div class="container-fluid">
    <div id="app">
        <div style="padding-top: 75px;">
            <nav-bar></nav-bar>
            @yield('content')
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('material/js/material.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>