<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marcos Lauder Correia de Oliveira">
    <meta name="description"
        content="Axie BR - Site de tradução de cartas e itens do Axie Infinity Origin para Português do Brasil">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MCZ2NEWTDE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MCZ2NEWTDE');
    </script>
</head>

<body>

    <header>
        <nav class="topnav" id="topnav">
            <a href="#" class="logo">
                Axie BR
            </a>
            <a href="{{ route('cards') }}" class="{{ Request::routeIs('cards') ? 'active' : '' }}">Cartas</a>
            <a href="{{ route('runes') }}" class="{{ Request::routeIs('runes') ? 'active' : '' }}">Runes</a>
            <a href="{{ route('charms') }}" class="{{ Request::routeIs('charms') ? 'active' : '' }}">Charms</a>
            <a href="{{ route('sobre') }}" class="{{ Request::routeIs('sobre') ? 'active' : '' }}">Sobre</a>
            <button class="icon" id='btn-bars'><i class="fa fa-bars"></i></button>
        </nav>
    </header>
    @yield('content')
    <footer>
        <a href="https://discord.gg/2zuh7Ufhy8" target="_blank">Discord do Desenvolvedor<br>Developer Discord</a>
    </footer>
    <script src="{{ mix('js/header.js') }}"></script>
    @yield('script')
</body>

</html>
