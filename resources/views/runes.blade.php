@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{ mix('css/runes.css') }}">
@endsection

@section('script')
@endsection

@section('content')
<section class="description">
    <h1>Runes</h1>
    <p>Runes são power-ups especiais que podem ser equipados em seu Axie. Cada Axie pode equipar um rune.</p>
</section>
<section class="itens">
    <img src="{{asset('images/runes_neutral.webp')}}">
</section>
@endsection
