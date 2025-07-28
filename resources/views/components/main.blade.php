<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Il Mio Portfolio' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{ $head_extra ?? '' }}
</head>

<body class="bg-body-tertiary">

    <header>
        <x-nav />
    </header>

    <main>
        {{ $slot }}
    </main>

    <x-footer />


    <script src="{{ asset('js/script.js') }}"></script>
    {{ $scripts_extra ?? '' }}

</body>

</html>
