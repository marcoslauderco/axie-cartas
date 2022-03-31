@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{ mix('css/about.css') }}">
@endsection

@section('script')
@endsection

@section('content')
<section class="about">
    <div></div>
    <div>
        <h1>Axie BR</h1>
        <h2>Sobre</h2>
        <p>Axie BR é um site contendo a tradução das cartas do jogo Axie Infinity Origin / Axie Infinity V3 para Português Brasileiro (PT-BR).</p>
        <p>Foi desenvolvido de um jogador BR para outros jogadores BR.</p>
        <p>Nosso intuito é ajudar e engajar a comunidade Brasileira do jogo e a entender melhor o funcionamento e habilidades de seus Axies.</p>
        <p>O uso desse site é totalmente 'na faixa' e não comercial, não pretendemos cobrar pelo seu uso e nem inserir propagandas.</p>
        <p>OBS: Como não ganhamos dinheiro também não queremos gastar dinheiro, sendo assim o site foi hospedado em plataforma grátis (heroku) e utiliza do dominio (link do site) dessa mesma plataforma.</p>
        <h2>Seja uma mão na roda</h2>
        <p>Encontrou algum erro de digitação/português, falhas de tradução ou bugs no site ?</p>
        <p>Seja uma mão na roda e nos informe através do nosso <a href="https://discord.gg/2zuh7Ufhy8" target="_blank">discord (acesse aqui)</a>.</p>
        <p>Isso nos ajuda e muito a manter nosso site o melhor possivel para todos!</p>
        <h2>Programadores gostam de café</h2>
        <p>Gostou do site? Gostaria de nos pagar um cafezinho?</p>
        <p>Transfira qualquer valor em SLP, AXS ou RON para a seguinte Ronin: ronin:c63a1e51724fcdb0255d224cc573d2edbec29721</p>
    </div>
</section>
@endsection
