<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="container">
        <div class="toto">
            <p class="text-red-500 font-bold">hello world</p>
        </div>
        <h1>Hello Toto</h1>
    </div>

</body>

</html>
