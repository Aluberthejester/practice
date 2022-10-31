<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Practica4 - {{ $title ?? '' }}</title>
</head>
<body>
    <x-layouts.navigation />
    <section class="container mx-auto bg-blue-400">
        {{ $slot }}
    </section>

    @vite('resources/js/app.js')
</body>
</html>