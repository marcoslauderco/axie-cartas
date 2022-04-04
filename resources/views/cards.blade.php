@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{ mix('css/cards.css') }}">
@endsection

@section('script')
<script src="{{ mix('js/filter.js') }}"></script>
@endsection

@section('content')

<section class="cards">
    @foreach($cartas as $carta)
    <x-card class="{{$carta->class}}" type="{{$carta->type}}" card="{{$carta->card}}" energy="{{$carta->energy}}" description="{{$carta->description}}" :traducao=$traducao />
    @endforeach

</section>
@endsection
