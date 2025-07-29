<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Il Mio Portfolio' }}</title>

    {{-- Carica il font Poppins da Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- Carica Bootstrap CSS e il tuo CSS personalizzato tramite Vite --}}
    {{-- Tutti gli stili e gli script sono ora gestiti da resources/css/app.css e resources/js/app.js tramite Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Bootstrap Icons (già importato in app.js, ma mantenere qui per compatibilità se non usi app.js per tutti i js) --}}
    {{-- Se app.js importa già 'bootstrap-icons/font/bootstrap-icons.css', questa riga può essere rimossa per evitare duplicati --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{ $head_extra ?? '' }}
</head>

{{-- Applica il font Poppins al corpo --}}

<body class="bg-body-tertiary font-poppins">

    <header>
        <x-nav />
    </header>

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    {{-- Non sono più necessari script specifici qui, tutto è in app.js --}}
    {{ $scripts_extra ?? '' }}

</body>

</html>
