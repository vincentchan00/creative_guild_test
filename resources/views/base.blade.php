<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title></title>
</head>
<body style="background: linear-gradient(rgba(202,221,222,255), rgba(179,156,133,255));" class="vh-100 container">

<div id="app">
    @yield('body')
</div>

</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>
