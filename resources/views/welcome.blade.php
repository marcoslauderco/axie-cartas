@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{ mix('css/cards.css') }}">
@endsection

@section('script')
<script src="{{ mix('js/filter.js') }}"></script>
@endsection

@section('content')
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
    @include('cards.eye')
</section>
@endsection
