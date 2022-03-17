<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    <div class="cards">
        <x-card class="aqua" type="back" card="anemone" energy="1" description="Quando comprada cura 20 de vida." />
        <x-card class="aqua" type="horn" card="anemonehorn" energy="1" description="Quando comprada cura 20 de vida." />
        <x-card class="bug" type="tail" card="ant" energy="1" description="Aplica {!!$taunt!!} nesse axie por 4 turnos." />
        <x-card class="bug" type="horn" card="antenna" energy="1" description="{!!$scry!!} 4 cartas. {!!$banish!!}." />
        <x-card class="beast" type="horn" card="arco" energy="1" description="Essa carta não aciona segredos." />
        <x-card class="beast" type="mouth" card="axiekiss" energy="1" description="Mire em um inimigo. Aplica {!!$deathmark!!} por 4 turnos se a vida desse axies estiver abaixo de 50%" />
        <x-card class="aqua" type="horn" card="babylonia" energy="1" description="Aplica {!!$weak!!} por 4 turnos" />
        <x-card class="bird" type="back" card="balloon" energy="1" description="Aplica {!!$fear!!} por 4 turnos" />
        <x-card class="plant" type="horn" card="bambooshoot" energy="1" description="Causa mais 20 de DANO por cada carta Bamboo usada nesse turno" />
        <x-card class="plant" type="horn" card="beech" energy="2" description="Ganha 75 de escudo" />
        <x-card class="plant" type="back" card="bidens" energy="1" description="Mire em um aliado, Remova todos os efeitos negativos do alvo" />
        <x-card class="aqua" type="back" card="bluemoon" energy="1" description="Compra uma carta" />
        <x-card class="reptile" type="back" card="bonesail" energy="1" description="Mire em um aliado. No próximo turnos, depois do ataque do alvo, compre uma carta." />
        <x-card class="reptile" type="horn" card="bumpy" energy="2" description="{!!$innate!!}. Quando você jogar uma carta em batalha, esse axie ganha 10 de escudo." />
        <x-card class="bug" type="back" card="buzzbuzz" energy="1" description="Ataca todos os inimigos. Embaralhe 1 {!!$daze!!} na pilha de descarte do oponente." />
        <x-card class="plant" type="horn" card="cactus" energy="1" description="Se for {!!$initial!!}, da mais 15 de dano." />
        <x-card class="plant" type="back" card="carrot" energy="1" description="Ganha 1 de energia se esse ataque causar dano na vida do alvo." />
        <x-card class="bug" type="horn" card="caterpillars" energy="1" description="Aplica {!!$fear!!} por 4 turnos" />
        <x-card class="aqua" type="mouth" card="catfish" energy="1" description="Cura a vida igual a 50% do dano não bloqueado." />
        <x-card class="plant" type="tail" card="cattail" energy="1" description="Aplica {!!$taunt!!} nesse axie por 4 turnos." />
        <x-card class="reptile" type="horn" card="cerastes" energy="1" description="Mire em qualquer aliado. O próximo ataque antes do alvo é refletido em 85 de DANO." />
        <x-card class="aqua" type="horn" card="clamshell" energy="1" description="Ganha 4 {!!$damage_boost!!} se esse ataque causar dano na vida do alvo" />
        <x-card class="bird" type="tail" card="cloud" energy="1" description="Esse ataque mira no Inimigo mais a frente não convocado" />
        <x-card class="beast" type="mouth" card="confident" energy="0" description="Embaralhe um {!!$void!!} na pilha de descarte do oponente. {!!$banish!!}." />
        <x-card class="beast" type="tail" card="cottontail" energy="0" description="Cura qualquer aliado. Ganha 1 energia. {!!$banish!!}." />
        <x-card class="reptile" type="back" card="croc" energy="1" description="Mire em qualquer aliado. No próximo turno depois do ataque do alvo, apica {!!$bleed!!} no atacante por 4 turnos" />
        <x-card class="bird" type="horn" card="cuckoo" energy="1" description="Mire em qualquer aliado. Remova {!!$sleep!!}. O proximo ataque do alvo nesse turno da 50 mais de DANO." />
        <x-card class="bird" type="back" card="cupid" energy="1" description="Apica {!!$bleed!!} por 4 turnos" />
        <x-card class="bug" type="mouth" card="cutebunny" energy="1" description="Aplica {!!$fear!!} por 4 turnos" />
        {{-- <x-card class="" type="" card="" energy="" description="" /> --}}
    </div>
</body>
</html>
