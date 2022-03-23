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
        <x-card class="bird" type="tail" card="granmasfan" energy="1"
            description="{!! $initial !!}. Ataca todos os inimigos. Aplica {!! $vulnerable !!} por 4 turnos." />
        <x-card class="reptile" type="tail" card="grasssnake" energy="1"
            description="Aplica {!! $hex !!} por 4 turnos." />
        <x-card class="bug" type="tail" card="gravelant" energy="1"
            description="Mire em um aliado. No próximo turno, depois do ataque do alvo, aplica {!! $fear !!} no atacante por 4 turnos." />
        <x-card class="reptile" type="back" card="greenthorns" energy="1"
            description="Aplica 2 de {!! $poison !!} X 6 vezes em um alvo aleatório. Cura esse Axie em 20 de vida." />
        <x-card class="beast" type="tail" card="hare" energy="1"
            description="Se {!! $initial !!}, compre 1 carta." />
        <x-card class="plant" type="tail" card="hatsune" energy="1"
            description="Mire em um aliado. No próximo turno, depois do ataque do alvo, aplica {!! $fear !!} no atacante por 4 turnos." />
        <x-card class="plant" type="mouth" card="herbivore" energy="1"
            description="Se {!! $initial !!}, Cura 15 de vida." />
        <x-card class="aqua" type="back" card="hermit" energy="1"
            description="Mire em um aliado. Negue 1 próximo ataque no aliado alvo." />
        <x-card class="beast" type="back" card="hero" energy="1" description="Compre 1 carta." />
        <x-card class="plant" type="tail" card="hotbutt" energy="1"
            description="Embaralhe 3 {!! $burns !!} na pilha de descarte do oponente." />
        <x-card class="bird" type="mouth" card="hungrybird" energy="1"
            description="Se {!! $initial !!}, cura 15 de vida." />
        <x-card class="reptile" type="tail" card="iguana" energy="1"
            description="Aplica {!! $weak !!} por 4 turnos" />
        <x-card class="beast" type="horn" card="imp" energy="1"
            description="Custa 0 de energia na forma {!! $fury !!}." />
        <x-card class="reptile" type="horn" card="incisor" energy="1"
            description="Aplica {!! $bleed !!} por 4 turnos" />
        <x-card class="reptile" type="back" card="indianstar" energy="1"
            description="Mire em um aliado. No próximo turno, depois do alvo ser atacado, reflete 25% do escudo perdido." />
        <x-card class="beast" type="back" card="jaguar" energy="1"
            description="Aplica {!! $bleed !!} por 4 turnos" />
        <x-card class="bird" type="horn" card="kestrel" energy="1"
            description="Aplica {!! $disarmed !!} por 4 turnos" />
        <x-card class="bird" type="back" card="kingfisher" energy="1"
            description="Mire em um aliado. No próximo ataque contra o alvo é refletido 85 de DANO." />
        <x-card class="aqua" type="tail" card="koi" energy="2"
            description="Da 15 de DANO Bônus por Aliado Aquatico." />
        <x-card class="reptile" type="mouth" card="kotaromouth" energy="1"
            description="Da 2 de acerto em inimigos aleatórios. Ganha 1 energia se acertar pelo menos 2 inimigos." />
        <x-card class="bug" type="horn" card="lagging" energy="1"
            description="Aplica {!! $weak !!} por 4 turnos" />
        <x-card class="aqua" type="mouth" card="lam" energy="1"
            description="Cause 20 de DANO extra se a vida deste Axie estiver acima de 75%" />
        <x-card class="bug" type="horn" card="leafbughorn" energy="1"
            description="Quando comprada, ganha 30 de escudo." />
        <x-card class="beast" type="horn" card="littlebranch" energy="2"
            description="Ganha 1 {!! $rage !!} por 1 aliado vivo (incluindo convocações)" />
        <x-card class="bird" type="mouth" card="littleowl mouth" energy="1"
            description="Todas as cartas 'Little Owl' deste Axie ganham 6 de dano nesta batalha" />
        <x-card class="beast" type="horn" card="merry" energy="1" description="Mire qualquer aliado." />
        <x-card class="plant" type="back" card="mint" energy="1"
            description="Proteja seu time e aplique 1 {!! $cleanser !!}" />
        <x-card class="bug" type="mouth" card="mosquito" energy="1"
            description="Cure a vida igual a 50% do DANO não bloqueado." />
        <x-card class="aqua" type="tail" card="navaga" energy="1"
            description="Se {!! $initial !!}, dê 15 mais de DANO" />
        <x-card class="aqua" type="tail" card="nimo" energy="0"
            description="Compre 1 carta. Ganha 1 de energia. {!! $banish !!}" />
        <x-card class="beast" type="mouth" card="nutcrackermouth" energy="1"
            description="Todas as cartas 'Nut Cracker' deste Axie ganham 6 de dano nesta batalha" />
        <x-card class="beast" type="tail" card="nutcrackertail" energy="1"
            description="Todas as cartas 'Nut Cracker' deste Axie ganham 6 de dano nesta batalha" />
        <x-card class="aqua" type="horn" card="oranda" energy="2"
            description="{!! $dispel !!} até 2 buffs no alvo." />

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
        <x-card class="" type="" card="scalyspoon" energy="" description="" />
        <x-card class="" type="" card="scarab" energy="" description="" />
        <x-card class="" type="" card="serious" energy="" description="" />
        <x-card class="" type="" card="shiba" energy="" description="" />
        <x-card class="" type="" card="shiitake" energy="" description="" />
        <x-card class="" type="" card="shoalstar" energy="" description="" />
        <x-card class="" type="" card="shrmp" energy="" description="" />
        <x-card class="" type="" card="silencewhisper" energy="" description="" />
        <x-card class="" type="" card="snailshell" energy="" description="" />
        <x-card class="" type="" card="snakejar" energy="" description="" />
        <x-card class="" type="" card="spikywing" energy="" description="" />
        <x-card class="" type="" card="sponge" energy="" description="" />
        <x-card class="" type="" card="squareteeth" energy="" description="" />
        <x-card class="" type="" card="strawberryshortcake" energy="" description="" />
        <x-card class="" type="" card="swallow" energy="" description="" />


        {{-- <x-card class="" type="" card="" energy="" description="" /> --}}
    </div>
</body>

</html>
