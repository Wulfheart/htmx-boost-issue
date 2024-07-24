<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="https://unpkg.com/htmx.org@2.0.1"></script>
    <script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>
    <link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
    @vite('resources/js/app.js')
</head>
<body>
    {{ $slot }}
</body>
<script>

</script>
</html>
