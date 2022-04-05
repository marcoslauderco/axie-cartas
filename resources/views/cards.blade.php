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
        <option value="">- Classes - Class</option>
        <option value="beast">Besta - Beast</option>
        <option value="bug">Inseto - Bug</option>
        <option value="bird">Pássaro - Bird</option>
        <option value="aqua">Peixe - Aquatic</option>
        <option value="plant">Planta - Plant</option>
        <option value="reptile">Réptil - Reptile</option>
    </select>
    <select id="sel-part" class="select">
        <option value="">- Parte - Part</option>
        <option value="mouth">Boca - Mouth</option>
        <option value="horn">Chifre - Horn</option>
        <option value="back">Costas - Back</option>
        <option value="eye">Olhos - Eye</option>
        <option value="ear">Orelha - Ear</option>
        <option value="tail">Rabo - Tail</option>
    </select>
    {{-- <select id="sel-efect" class="select">
        <option value="">- Efeitos -</option>
        @foreach ($efeitos as $index => $efeito)
        <option value="{{ $index }}">{{ $efeito }}</option>
    @endforeach

    </select>
    <select id="sel-power" class="select">
        <option value="">- Ataque, Defesa, Cura, Nenhum -</option>
        <option value="atack">Ataque</option>
        <option value="defense">Desesa</option>
        <option value="heal">Cura</option>
        <option value="power-none">Nenhum</option>

    </select>
    <select id="sel-energy" class="select">
        <option value="">- Custo (Energia) -</option>
        <option value="energy-0">0</option>
        <option value="energy-1">1</option>
        <option value="energy-2">2</option>
    </select> --}}
</section>
<section class="cards">
    @foreach($cartas as $carta)
    <x-card class="{{$carta->class}}" type="{{$carta->type}}" card="{{$carta->card}}" energy="{{$carta->energy}}" description="{{$carta->description}}" :traducao=$traducao />
    @endforeach

</section>
@endsection
