<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>sample</h1>
    <div id="app">
        <example-component></example-component>
    </div>

</body>

</html>
