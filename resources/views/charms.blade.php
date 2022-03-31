@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{ mix('css/runes.css') }}">
@endsection

@section('script')
@endsection

@section('content')
<section class="description">
    <h1>Charms</h1>
    <p>Charms são power-ups que melhoram as partes e habilidades de um axie. Cada uma das seis habilidades de um Axie pode equipar um Charm.</p>
</section>
<section class="itens">
    <img src="{{asset('images/charm_neutral_epic.webp')}}">
    <img src="{{asset('images/charm_neutral_mystic.webp')}}">
</section>
@endsection
