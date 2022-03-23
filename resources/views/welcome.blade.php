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
        <x-card class="bug" type="horn" card="parasite" energy="1"
            description="Olhe para as 2 cartas do topo da pilha de compras do seu oponente " />
        <x-card class="bird" type="mouth" card="peacemaker" energy="1"
            description="Aplique {!! $weak !!} por 2 turnos. Se o alvo tiver {!! $weak !!} previamente, cause 15 a mais de dano." />
        <x-card class="aqua" type="back" card="perch" energy="2"
            description="Cause 4 ataques. Prioriza o alvo com menor Vida." />
        <x-card class="bird" type="back" card="pigeonpost" energy="1"
            description="Adicione 1 {!! $blackmail !!} a mão do seu oponente." />
        <x-card class="bug" type="mouth" card="pinder" energy="1"
            description="Aplique {!! $bleed !!} por 4 turnos." />
        <x-card class="aqua" type="mouth" card="pirhana" energy="1"
            description="Aplique {!! $bleed !!} por 4 turnos." />
        <x-card class="bug" type="horn" card="pliers" energy="1"
            description="Cause 25% mais DANO à escudos." />
        <x-card class="beast" type="horn" card="pocky" energy="1"
            description="Ataque um inimigo aleatório. Aplique {!! $taunt !!} por 2 turnos." />
        <x-card class="bird" type="tail" card="postfight" energy="1"
            description="Este Axie perde 35 de Vida." />
        <x-card class="plant" type="tail" card="potato leaf" energy="1"
            description="Ganha {!! $stealth !!} se houver pelo menos 1 Axie vivo." />
        <x-card class="plant" type="back" card="pumpkin" energy="1"
            description="Selecione um aliado. No próximo turno, depois que o alvo for atacado, compre 1 carta." />
        <x-card class="bug" type="tail" card="pupae" energy="1"
            description="Selecione um aliado. No próximo turno, após o alvo ser atacado, ele ganha 2 {!! $damage_boost !!}" />
        <x-card class="aqua" type="tail" card="ranchu" energy="2"
            description="Ataque todos os inimigos. Aplica {!! $weak !!} por 2 turnos." />
        <x-card class="bird" type="back" card="raven" energy="1"
            description="Embarahe 1 {!! $jinx !!} no baralho de descarte do seu oponente" />
        <x-card class="reptile" type="mouth" card="razorbite" energy="1"
            description="Cure a Vida desse Axie igual a 50% do dano não bloqueado." />
        <x-card class="reptile" type="back" card="redear" energy="1" description="Selecione um aliado." />
        <x-card class="beast" type="tail" card="rice" energy="1"
            description="{!! $steal !!} 40 de Vida. Ganhe 1 de energia se a Vida deste Axie estiver cheio." />
        <x-card class="beast" type="back" card="riskybeast" energy="1"
            description="Aplica {!! $weak !!} a este Axie por 2 turnos." />
        <x-card class="aqua" type="mouth" card="riskyfish" energy="1"
            description="Aplica {!! $weak !!} a este Axie por 2 turnos." />
        <x-card class="beast" type="back" card="ronin" energy="1"
            description="Cause 50% mais de DANO por energia gasta neste turno." />
        <x-card class="plant" type="horn" card="rosebud" energy="1" description="" />
        <x-card class="bug" type="back" card="sandal" energy="2"
            description="Aplica {!! $fear !!} por 2 turnos. Se o alvo já tiver {!! $fear !!} anteriormente, causa 50% mais dano." />
        <x-card class="reptile" type="horn" card="scalyspear" energy="1"
            description="Cause 20 a mais de DANO por cada carta Spear usada nesse turno." />
        <x-card class="reptile" type="horn" card="scalyspoon" energy="1"
            description="Selecione um aliado, no próximo turno, depois que o alvo for atacado, reflita 25% do escudo perdido." />
        <x-card class="bug" type="back" card="scarab" energy="1"
            description="Ganha 30 de escudo. Aplica {!! $doubt !!} por 4 turnos" />
        <x-card class="plant" type="mouth" card="serious" energy="1"
            description="Descarte 1 carta da sua mão." />
        <x-card class="beast" type="tail" card="shiba" energy="2"
            description="Seu time ganha 3 {!! $fury !!} se a Vida deste Axie estiver abaixo de 50%." />
        <x-card class="plant" type="back" card="shiitake" energy="1"
            description="Invoque um {!! $mushroom !!}" />
        <x-card class="aqua" type="horn" card="shoalstar" energy="1"
            description="Se o alvo tiver menos de 120 de vida, mate-o instantaneamente." />
        <x-card class="aqua" type="tail" card="shrmp" energy="1"
            description="Se {!! $initial !!}, Este ataque atinge o inimigo mais distante." />
        <x-card class="plant" type="mouth" card="silencewhisper" energy="1"
            description="Selecione um aliado." />
        <x-card class="bug" type="back" card="snailshell" energy="1"
            description="Selecione um aliado, no próximo turno depois que o alvo for atacado, embaralhe 1 {!! $goo !!} no baralho de descarte do seu oponente." />
        <x-card class="reptile" type="tail" card="snakejar" energy="1"
            description="Selecione um aliado. Nega a próxima perda de Vida no alvo, até 90 de vida." />
        <x-card class="bug" type="back" card="spikywing" energy="1"
            description="Causa 25% a mais de DANO em escudos." />
        <x-card class="aqua" type="back" card="sponge" energy="1"
            description="Seleciona um aliado. No próximo turno, aplica 5 {!! $damage_boost !!} ao alvo com escudo se o seu escudo estiver quebrado." />
        <x-card class="bug" type="mouth" card="squareteeth" energy="0"
            description="Se {!! $initial !!}, cause DANO extra igual ao escudo atual." />
        <x-card class="plant" type="horn" card="strawberryshortcake" energy="2"
            description="Adiciona 2 {!! $strawberry !!} a sua mão" />
        <x-card class="bird" type="tail" card="swallow" energy="1"
            description="Se {!! $initial !!}, cause 15 a mais de DANO." />
        <x-card class="aqua" type="tail" card="tadpole" energy="1"
            description="Embaralhe 1 {!! $jinx !!} no baralho de descarte do seu oponente." />
        <x-card class="aqua" type="horn" card="tealshell" energy="1"
            description="Selecione um aliado. Ganha 20 de escudo por cada carta jodada neste turno." />
        <x-card class="bird" type="tail" card="thelastone" energy="1"
            description="Causa 20 mais de DANO se essa fora a única carta em sua mão." />
        <x-card class="bug" type="tail" card="thornycaterpillar" energy="2"
            description="Cause 50% mais de dano contra inimigos com penalidades." />
        <x-card class="beast" type="back" card="timber" energy="1"
            description="Selecione um aliado. No próximo turno, depois que algum aliado for atacadom adicione 1 {!! $lumbershield !!} a sua mão." />
        <x-card class="reptile" type="mouth" card="tinyturtle" energy="1"
            description="Aplique {!! $stunned !!} por 2 turnos se este ataque causar perde de Vida no alvo." />
        <x-card class="reptile" type="tail" card="tinyudino" energy="1"
            description="{!! $retain !!}. Essa carta ganha 15 de dano extra para cada turno se retido. Máximo 4 turnos." />
        <x-card class="reptile" type="mouth" card="toothlessbite" energy="1"
            description="Se {!! $initial !!}, este ataque atinge o inimigo mais distante." />
        <x-card class="bird" type="back" card="trifeather" energy="1"
            description="Ataque todos os inimigos." />
        <x-card class="reptile" type="back" card="trispikes" energy="1" description="Cause 3 ataques." />
        <x-card class="bird" type="horn" card="trump" energy="1"
            description="Cause 20 a mais de dano por cada carta Trump usada neste turno." />
        <x-card class="plant" type="back" card="turnip" energy="1"
            description="Depois que seu oponente incovar uma unidade, cause 25 de Dano a ela." />
        <x-card class="bug" type="tail" card="twintail" energy="1" description="Causa 2 ataques" />
        <x-card class="reptile" type="horn" card="unko" energy="1"
            description="Embaralhe 1 {!! $goo !!} no baralho de descarte do seu oponente." />
        <x-card class="reptile" type="tail" card="wallgecko" energy="1"
            description="Este axie perde 50 de Vida. Recebe 30% menos DANO por 4 turnos." />
        <x-card class="plant" type="back" card="wateringcan" energy="1"
            description="Selecione um aliado. No próximo turno, depois que algum aliado for atacado, adicione 1 {!! $purewater !!}  a sua mão." />
        <x-card class="plant" type="horn" card="watermelon" energy="1"
            description="Sempre que comprado, cure 20 de vida." />
        <x-card class="bird" type="horn" card="winghorn" energy="1"
            description="Se {!! $initial !!}, este ataque atinge o segundo alvo mais a frente." />
        <x-card class="plant" type="tail" card="yam" energy="0"
            description="Ataca e aplica 2 {!! $poison !!} a todos os inimigos." />
        <x-card class="plant" type="mouth" card="zigzag" energy="1"
            description="Cure a Vida igual a 50% do dano não bloqueado." />

        {{-- ORELHA --}}
        <x-card class="bug" type="ear" card="beetlspike" energy="1"
            description="Da DANO puro. Aplica {!! $bleed !!} por 4 turnos." />
        <x-card class="beast" type="ear" card="belieber" energy="1"
            description="De 3 golpes aleatórios. Ganha 1 {!! $rage !!} por inimigo atingido." />
        <x-card class="aqua" type="ear" card="bubblemaker" energy="1"
            description="Escolha um aliado. o alvo ganha 2 {!! $bubble !!}" />
        <x-card class="plant" type="ear" card="clover" energy="1"
            description="Invoque 1 {!! $clover !!}" />
        <x-card class="bird" type="ear" card="curly" energy="1"
            description="Dê 25% a mais de DANO em escudo." />
        <x-card class="reptile" type="ear" card="curvedspine" energy="1"
            description="Escolha qualquer aliado. No próximo turno, depois do alvo ser atacado, aplica {!! $bleed !!} no atacante por 4 turnos." />
        <x-card class="bug" type="ear" card="earbreathing" energy="2"
            description="Da 4 golpes aleatórios. Compre 1 {!! $goo !!} por inimigo atingido no baralho de descarte do oponente." />
        <x-card class="bird" type="ear" card="earlybird" energy="1"
            description="Se {!! $initial !!}, compre uma carta." />
        <x-card class="bug" type="ear" card="earwing" energy="1"
            description="Ataca todos os inimigos. Da um bônus de 3 de Dano por carta em sua mão." />
        <x-card class="reptile" type="ear" card="friezard" energy="1"
            description="Aplique o efeito aleatoriamente 4 vezes à cura da sua equipe e aplique 1 {!! $damage_boost !!} a cada vez" />
        <x-card class="aqua" type="ear" card="gill" energy="1"
            description="Seu time ganha 1 {!! $bubble !!}" />
        <x-card class="plant" type="ear" card="hollow" energy="0"
            description="Esse Axie perde 75 de Vida. Invoca um {!! $trunk !!}" />
        <x-card class="aqua" type="ear" card="inkling" energy="1"
            description="Embaralhe 1 {!! $jinx !!} no baralho de descarte do seu oponente." />
        <x-card class="beast" type="ear" card="innocentlamb" energy="1"
            description="Selecione e adicione uma cópia da carta de 'Skill' desse axie para sua mão. {!! $banish !!}" />
        <x-card class="bug" type="ear" card="larva" energy="0"
            description="{!! $scry !!} 2 cartas. Ganha 1 de energia se descartar 1 carta de 'skill' depois de ver as cartas." />
        <x-card class="bug" type="ear" card="leafbugear" energy="1"
            description="Sempre que comprada ganha 30 de Escudo." />
        <x-card class="plant" type="ear" card="leafy" energy="0"
            description="Dê 2 golpes aleatórios, Consome até 3 {!! $leaf !!}s para dar 5 de DANO por {!! $leaf !!} consumido." />
        <x-card class="bird" type="ear" card="littleowlear" energy="1"
            description="Todas as cartas 'Little Owl' deste Axie ganham 6 de dano nesta batalha" />
        <x-card class="plant" type="ear" card="lotus" energy="1" description="" />
        <x-card class="aqua" type="ear" card="nimoear" energy="0"
            description="Ganha 1 de energia se a Vida desse Axie estiver cheia." />
        <x-card class="beast" type="ear" card="nutcracketear" energy="1"
            description="Todas as cartas 'Nut Cracker' deste Axie ganham 6 de dano nesta batalha" />
        <x-card class="beast" type="ear" card="nyan" energy="1"
            description="Da 15 de bônus de DANO contra inimigos 'Bleeding'" />
        <x-card class="reptile" type="ear" card="pagona" energy="1"
            description="Aplica {!! $fragile !!} por 4 turnos." />
        <x-card class="bird" type="ear" card="peacemakerear" energy="1"
            description="Aplica {!! $weak !!} por 2 turnos. Se o alvo estiver {!! $weak !!} previamente dê 15 de DANO a mais." />
        <x-card class="bird" type="ear" card="pinkcheeck" energy="0"
            description="Descarte até 2 cartas então compre a mesma quantidade. {!! $banish !!}" />
        <x-card class="beast" type="ear" card="puppy" energy="1"
            description="Cura seu time. Se {!! $initial !!}, remove 1 'Curse Card' do seu baralho." />
        <x-card class="bird" type="ear" card="riskybird" energy="1"
            description="Aplica {!! $weak !!} nesse Axie por 2 turnos." />
        <x-card class="plant" type="ear" card="rosa" energy="0"
            description="{!! $innate !!}. Aplica 2 {!! $poison !!} e {!! $sleep !!} por 2 turnos em um inimigo aleatório. {!! $banish !!}" />
        <x-card class="plant" type="ear" card="sakura" energy="2"
            description="Escolha qualquer aliado. Sempre que jogar essa carta em batalha, cura esse Axie em 10 de Vida." />
        <x-card class="aqua" type="ear" card="seaslug" energy="2"
            description="{!! $cleanse !!} 2 desvantagens. Ganha 2 {!! $cleanser !!}" />
        <x-card class="reptile" type="ear" card="sidebarb" energy="1"
            description="Aplica 2 {!! $poison !!} e {!! $bleed !!} por 4 turnos em um inimigo aleatório." />
        <x-card class="reptile" type="ear" card="smallfrill" energy="1"
            description="Aplica 3 {!! $poison !!} em todos os inimigos. Cura esse Axie em 30 de Vida." />
        <x-card class="reptile" type="ear" card="swirl" energy="1"
            description="Embaralhe 3 {!! $confused !!} no baralho de discarte do oponete." />
        <x-card class="bug" type="ear" card="tassels" energy="1"
            description="Cura seu time. Cura um bônus de 4 de Vida por cada carta em sua mão." />
        <x-card class="aqua" type="ear" card="tinyfan" energy="0"
            description="Compra 1 carta. Ganha 3 {!! $damage_boost !!}" />
        <x-card class="beast" type="ear" card="zen" energy="1"
            description="Se {!! $initial !!}, esse Axie {!! $meditates !!}" />
    </div>
</body>

</html>
