<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <section class="filter">
        <select id="sel-class" class="select">
            <option value="">Classes - Class</option>
            <option value="beast">Besta - Beast</option>
            <option value="bug">Inseto - Bug</option>
            <option value="bird">Pássaro - Bird</option>
            <option value="aqua">Peixe - Aquatic</option>
            <option value="plant">Planta - Plant</option>
            <option value="reptile">Réptil - Reptile</option>
        </select>
        <select id="sel-part" class="select">
            <option value="">Parte - Part</option>
            <option value="mouth">Boca - Mouth</option>
            <option value="horn">Chifre - Horn</option>
            <option value="back">Costas - Back</option>
            <option value="eye">Olhos - Eye</option>
            <option value="ear">Orelha - Ear</option>
            <option value="tail">Rabo - Tail</option>
        </select>
    </section>
    <section class="cards">
        @include('cards.cards')
        @include('cards.ear')
    </section>
    <script src="{{ mix('js/filter.js') }}"></script>
</body>

</html>
