<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div class="cards">
        <x-card class="aqua" type="back" card="anemone" energy="1"
            description="Quando comprada cura 20 de vida." />
        <x-card class="aqua" type="horn" card="anemonehorn" energy="1"
            description="Quando comprada cura 20 de vida." />
        <x-card class="bug" type="tail" card="ant" energy="1"
            description="Aplica {!! $taunt !!} nesse axie por 4 turnos." />
        <x-card class="bug" type="horn" card="antenna" energy="1"
            description="{!! $scry !!} 4 cartas. {!! $banish !!}." />
        <x-card class="beast" type="horn" card="arco" energy="1"
            description="Essa carta não aciona segredos." />
        <x-card class="beast" type="mouth" card="axiekiss" energy="1"
            description="Mire em um inimigo. Aplica {!! $deathmark !!} por 4 turnos se a vida desse axies estiver abaixo de 50%" />
        <x-card class="aqua" type="horn" card="babylonia" energy="1"
            description="Aplica {!! $weak !!} por 4 turnos" />
        <x-card class="bird" type="back" card="balloon" energy="1"
            description="Aplica {!! $fear !!} por 4 turnos" />
        <x-card class="plant" type="horn" card="bambooshoot" energy="1"
            description="Causa mais 20 de DANO por cada carta Bamboo usada nesse turno" />
        <x-card class="plant" type="horn" card="beech" energy="2" description="Ganha 75 de escudo" />
        <x-card class="plant" type="back" card="bidens" energy="1"
            description="Mire em um aliado, Remova todos os efeitos negativos do alvo" />
        <x-card class="aqua" type="back" card="bluemoon" energy="1" description="Compra uma carta" />
        <x-card class="reptile" type="back" card="bonesail" energy="1"
            description="Mire em um aliado. No próximo turnos, depois do ataque do alvo, compre uma carta." />
        <x-card class="reptile" type="horn" card="bumpy" energy="2"
            description="{!! $innate !!}. Quando você jogar uma carta em batalha, esse axie ganha 10 de escudo." />
        <x-card class="bug" type="back" card="buzzbuzz" energy="1"
            description="Ataca todos os inimigos. Embaralhe 1 {!! $daze !!} na pilha de descarte do oponente." />
        <x-card class="plant" type="horn" card="cactus" energy="1"
            description="Se for {!! $initial !!}, da mais 15 de dano." />
        <x-card class="plant" type="back" card="carrot" energy="1"
            description="Ganha 1 de energia se esse ataque causar dano na vida do alvo." />
        <x-card class="bug" type="horn" card="caterpillars" energy="1"
            description="Aplica {!! $fear !!} por 4 turnos" />
        <x-card class="aqua" type="mouth" card="catfish" energy="1"
            description="Cura a vida igual a 50% do dano não bloqueado." />
        <x-card class="plant" type="tail" card="cattail" energy="1"
            description="Aplica {!! $taunt !!} nesse axie por 4 turnos." />
        <x-card class="reptile" type="horn" card="cerastes" energy="1"
            description="Mire em qualquer aliado. O próximo ataque antes do alvo é refletido em 85 de DANO." />
        <x-card class="aqua" type="horn" card="clamshell" energy="1"
            description="Ganha 4 {!! $damage_boost !!} se esse ataque causar dano na vida do alvo" />
        <x-card class="bird" type="tail" card="cloud" energy="1"
            description="Esse ataque mira no Inimigo mais a frente não convocado" />
        <x-card class="beast" type="mouth" card="confident" energy="0"
            description="Embaralhe um {!! $void !!} na pilha de descarte do oponente. {!! $banish !!}." />
        <x-card class="beast" type="tail" card="cottontail" energy="0"
            description="Cura qualquer aliado. Ganha 1 energia. {!! $banish !!}." />
        <x-card class="reptile" type="back" card="croc" energy="1"
            description="Mire em qualquer aliado. No próximo turno depois do ataque do alvo, apica {!! $bleed !!} no atacante por 4 turnos" />
        <x-card class="bird" type="horn" card="cuckoo" energy="1"
            description="Mire em qualquer aliado. Remova {!! $sleep !!}. O proximo ataque do alvo nesse turno da 50 mais de DANO." />
        <x-card class="bird" type="back" card="cupid" energy="1"
            description="Apica {!! $bleed !!} por 4 turnos" />
        <x-card class="bug" type="mouth" card="cutebunny" energy="1"
            description="Aplica {!! $fear !!} por 4 turnos" />
        <x-card class="bird" type="mouth" card="doubletalk" energy="1"
            description="Se for {!! $initial !!}, Aplica {!! $sleep !!} por 4 turnos" />
        <x-card class="beast" type="horn" card="dualblade" energy="1"
            description="Aplica {!! $fragile !!} por 4 turnos" />
        <x-card class="bird" type="horn" card="eggshell" energy="1"
            description="Aplica {!! $taunt !!} nesse axie por 2 turnos." />
        <x-card class="bird" type="tail" card="featherfan" energy="2"
            description="Cause 4 acertos aleatoriamente. Seu time ganha 1 {!! $feather !!} por inimigo atingido." />
        <x-card class="bird" type="horn" card="featherspear" energy="1"
            description="Cause 20 de DANO a mais para cada carta de Lança usada neste turno." />
        <x-card class="bug" type="tail" card="fishsnack" energy="1"
            description="Mire em qualquer aliado. No próximo turno, depois do ataque do alvo, apica {!! $weak !!} no atacante por 4 turnos " />
        <x-card class="beast" type="back" card="furball" energy="1" description="Acerte 2 vezes." />

        <x-card class="bug" type="back" card="garishworm" energy="2"
            description="Aplica 2 {!! $poison !!} por carta de ataque jogada nesse turno." />
        <x-card class="beast" type="tail" card="gerbil" energy="1"
            description="Se {!! $initial !!}, este ataque tem como alvo o segundo inimigo mais à frente." />
        <x-card class="reptile" type="tail" card="gila" energy="2"
            description="Ataca todos os inimigos. Da 2 bonus de DANO por {!! $poison !!} aplicado no iminigo." />
        <x-card class="beast" type="mouth" card="goda" energy="1"
            description="Embaralhe um {!! $void !!} na pilha de descarte do oponente. {!! $banish !!}." />
        <x-card class="aqua" type="back" card="goldfish" energy="1"
            description="Se {!! $initial !!}, compre 1 carta." />
        <x-card class="bird" type="tail" card="granmasfan" energy="" description="" />
        <x-card class="" type="" card="grasssnake" energy="" description="" />
        <x-card class="" type="" card="gravelant" energy="" description="" />
        <x-card class="" type="" card="greenthorns" energy="" description="" />

        <x-card class="" type="" card="hare" energy="" description="" />
        <x-card class="" type="" card="hatsune" energy="" description="" />
        <x-card class="" type="" card="herbivore" energy="" description="" />
        <x-card class="" type="" card="hermit" energy="" description="" />
        <x-card class="" type="" card="hero" energy="" description="" />
        <x-card class="" type="" card="hotbutt" energy="" description="" />
        <x-card class="" type="" card="hungrybird" energy="" description="" />

        <x-card class="" type="" card="iguana" energy="" description="" />
        <x-card class="" type="" card="imp" energy="" description="" />
        <x-card class="" type="" card="incisor" energy="" description="" />
        <x-card class="" type="" card="indianstar" energy="" description="" />
        <x-card class="" type="" card="jaguar" energy="" description="" />

        <x-card class="" type="" card="kestrel" energy="" description="" />
        <x-card class="" type="" card="kingfisher" energy="" description="" />
        <x-card class="" type="" card="koi" energy="" description="" />
        <x-card class="" type="" card="kotaromouth" energy="" description="" />

        <x-card class="" type="" card="lagging" energy="" description="" />
        <x-card class="" type="" card="lam" energy="" description="" />
        <x-card class="" type="" card="leafbughorn" energy="" description="" />
        <x-card class="" type="" card="littlebranch" energy="" description="" />
        <x-card class="" type="" card="littleowl mouth" energy="" description="" />

        <x-card class="" type="" card="merry" energy="" description="" />
        <x-card class="" type="" card="mint" energy="" description="" />
        <x-card class="" type="" card="mosquito" energy="" description="" />

        <x-card class="" type="" card="navaga" energy="" description="" />
        <x-card class="" type="" card="nimo" energy="" description="" />
        <x-card class="" type="" card="nutcrackermouth" energy="" description="" />
        <x-card class="" type="" card="nutcrackertail" energy="" description="" />

        <x-card class="" type="" card="oranda" energy="" description="" />

        <x-card class="" type="" card="parasite" energy="" description="" />
        <x-card class="" type="" card="peacemaker" energy="" description="" />
        <x-card class="" type="" card="perch" energy="" description="" />
        <x-card class="" type="" card="pigeonpost" energy="" description="" />
        <x-card class="" type="" card="pinder" energy="" description="" />
        <x-card class="" type="" card="pirhana" energy="" description="" />
        <x-card class="" type="" card="pliers" energy="" description="" />
        <x-card class="" type="" card="pocky" energy="" description="" />
        <x-card class="" type="" card="postfight" energy="" description="" />
        <x-card class="" type="" card="potato leaf" energy="" description="" />
        <x-card class="" type="" card="pumpkin" energy="" description="" />
        <x-card class="" type="" card="pupae" energy="" description="" />

        <x-card class="" type="" card="ranchu" energy="" description="" />
        <x-card class="" type="" card="raven" energy="" description="" />
        <x-card class="" type="" card="razorbite" energy="" description="" />
        <x-card class="" type="" card="redear" energy="" description="" />
        <x-card class="" type="" card="rice" energy="" description="" />
        <x-card class="" type="" card="riskybeast" energy="" description="" />
        <x-card class="" type="" card="riskyfish" energy="" description="" />
        <x-card class="" type="" card="ronin" energy="" description="" />
        <x-card class="" type="" card="rosebud" energy="" description="" />

        <x-card class="" type="" card="sandal" energy="" description="" />
        <x-card class="" type="" card="scalyspear" energy="" description="" />
        <x-card class="" type="" card="scaluspoon" energy="" description="" />
        <x-card class="" type="" card="scarab" energy="" description="" />
        <x-card class="" type="" card="serious" energy="" description="" />
        <x-card class="" type="" card="shiba" energy="" description="" />
        <x-card class="" type="" card="shiitake" energy="" description="" />
        <x-card class="" type="" card="shoalstar" energy="" description="" />
        <x-card class="" type="" card="shrmp" energy="" description="" />
        <x-card class="" type="" card="silencewhisper" energy="" description="" />
        <x-card class="" type="" card="snailshell" energy="" description="" />
        <x-card class="" type="" card="snakejar" energy="" description="" />
        <x-card class="" type="" card="spikwing" energy="" description="" />
        <x-card class="" type="" card="sponge" energy="" description="" />
        <x-card class="" type="" card="squareteeth" energy="" description="" />
        <x-card class="" type="" card="strawberryshortcake" energy="" description="" />
        <x-card class="" type="" card="swallow" energy="" description="" />


        {{-- <x-card class="" type="" card="" energy="" description="" /> --}}
    </div>
</body>

</html>
