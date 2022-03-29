<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $taunt = "<span class='debuff tooltip'>Taunt<span class='tooltiptext'>Insulto: O Alvo é sempre alvejado por abilidades de ataque do inimigo</span></span>";
    $deathmark = "<span class='debuff tooltip'>Death Mark<span class='tooltiptext'>Marca da Morte:Sempre que seu oponente joga uma carta de ataque, o alvo leva 13 de DANO por energia gasta</span></span>";
    $fear = "<span class='debuff tooltip'>Fear<span class='tooltiptext'>Medo: Sempre que essa unidade usar uma carta de ataque, embaralha 1 CONFUSED no baralho de compra.</span></span>";
    $scry = "<span class='debuff tooltip'>Scry<span class='tooltiptext'>Vidência: Olhe para as cartas do topo do seu baralho de compra, você deve descartar uma delas.</span></span>";
    $banish = "<span class='debuff tooltip'>Banish<span class='tooltiptext'>Banir: Remove essa carta do seu baralho até o fim da partida.</span></span>";
    $weak = "<span class='debuff tooltip'>Weak<span class='tooltiptext'>Fraquesa: O Alvo leva 20% menos DANO de ataque.</span></span>";
    $innate = "<span class='debuff tooltip'>Innate<span class='tooltiptext'>Inicial: Começa cada partida com essa carta em sua mão.</span></span>";
    $daze = "<span class='debuff tooltip'>Daze<span class='tooltiptext'>Atordoa: [Carta] não jogavel</span></span>";
    $initial = "<span class='debuff tooltip'>Initial<span class='tooltiptext'>Inicial: Primeira carta jogada no turno.</span></span>";
    $damage_boost = "<span class='debuff tooltip'>Damage Boost<span class='tooltiptext'>Aumento de dano: O alvo tem um aumento de DANO de ataque em 1 por pilha.</span></span>";
    $void = "<span class='debuff tooltip'>Void<span class='tooltiptext'>Vazio: [Carta] Não jogavel, Etérea, Quando você compra 1 ou mais VOID, perde 1 de energia.</span></span>";
    $sleep = "<span class='debuff tooltip'>Sleep<span class='tooltiptext'>Dormir: O Alvo não pode usar habilidade, se for atacado o sleep é removido.</span></span>";
    $bleed = "<span class='debuff tooltip'>Bleed<span class='tooltiptext'>Sangrar: O alvo perde 15 de VIDA quando joga uma carta</span></span>";
    $fragile = "<span class='debuff tooltip'>Fragile<span class='tooltiptext'>Fragil: Essa unidade recebe 20% menos escudo de habilidades.</span></span>";
    $feather = "<span class='debuff tooltip'>Feather<span class='tooltiptext'>Pena: Quando Axie fizer um ataque sem multi-hit, consuma todas as pilhas de Penas para causar 2 DANO bônus por pilha e curar 2 HP por pilha. Máximo: 10 pilhas.</span></span>";
    $poison = "<span class='debuff tooltip'>Poison<span class='tooltiptext'>Veneno: O alvo perde 3 HP por pilha no início de seu turno. As pilhas são reduzidas em 1. Limite: 30 pilhas.</span></span>";
    $vulnerable = "<span class='debuff tooltip'>Vulnerable<span class='tooltiptext'>Vuneravel: O Alvo leva 20% mais DANO de ataque.</span></span>";
    $hex = "<span class='debuff tooltip'>Hex<span class='tooltiptext'>Feitiço: [CARTA] Sempre que o alvo usar uma carta que não seja de ataque, embaralha 1 CONFUSED no baralho de compra.</span></span>";
    $burns = "<span class='debuff tooltip'>Burns<span class='tooltiptext'>Queimando:  [Carta] No final do seu turno todos os aliados tomam 8 de DANO.</span></span>";
    $fury = "<span class='debuff tooltip'>Fury<span class='tooltiptext'>Fúria: Ganhe 1 Energia quando transformado. Cause o dobro de dano até o final do turno.</span></span>";
    $disarmed = "<span class='debuff tooltip'>Disarmed<span class='tooltiptext'>Desarmado: O alvo não pode usar habilidade de ataque.</span></span>";
    $rage = "<span class='debuff tooltip'>Rage<span class='tooltiptext'>Ráiva: +2 de DANO por RAGE pilha. Entra em FURY apartir de 10 RAGE pilha.</span></span>";
    $cleanser = "<span class='debuff tooltip'>Cleanser<span class='tooltiptext'>Limpador: Cada pilha nega 1 desvantagem de ser aplicada no alvo.</span></span>";
    $cleanse = "<span class='debuff tooltip'>Cleanse<span class='tooltiptext'>Limpa: Remove desvantagem. até 5 pilhas.</span></span>";
    $dispel = "<span class='debuff tooltip'>Dispel<span class='tooltiptext'>Dissipar: Remove 1 vantagem do alvo, até 5 pilhas.</span></span>";
    $blackmail = "<span class='debuff tooltip'>Blackmail<span class='tooltiptext'>Chantagem: [CARTA] Aplica TAUNT no alvo mais distante. se não for usada coloque no topo do seu baralho de compra. BANISH</span></span>";
    $stealth = "<span class='debuff tooltip'>Stealth<span class='tooltiptext'>Furtividade: O alvo não pode ser mirado diretamente. se jogado uma carta remove o Stealth.</span></span>";
    $jinx = "<span class='debuff tooltip'>Jinx<span class='tooltiptext'>Azar: [CARTA] Não jogavel, Etérea, No final do seu turno seu último Axie leva 15 de DANO.</span></span>";
    $steal = "<span class='debuff tooltip'>Steal<span class='tooltiptext'>Roubar: Da dano puro e ganha Vida</span></span>";
    $doubt = "<span class='debuff tooltip'>Doubt<span class='tooltiptext'>Dúvida: O alvo recebe 20% menos de VIDA de cura.</span></span>";
    $mushroom = "<span class='debuff tooltip'>Mushroom<span class='tooltiptext'>Cogumelo: Planta | 18 de VIDA | Quando seu turno terminar, esse MUSHRROM restaura 24 HP ao seu aliado mais ferido e perde 8 HP.</span></span>";
    $goo = "<span class='debuff tooltip'>Goo<span class='tooltiptext'>Gosma: [CARTA] Banish</span></span>";
    $strawberry = "<span class='debuff tooltip'>Strawberry<span class='tooltiptext'>Morango: [CARTA] Retain, Escolha qualquer aliado. Banish</span></span>";
    $lumbershield = "<span class='debuff tooltip'>Lumber Shield<span class='tooltiptext'>Escudo de Madeira: [CARTA] Retain, Escolha qualquer aliado. Banish</span></span>";
    $stunned = "<span class='debuff tooltip'>Stunned<span class='tooltiptext'>Atordoado: O alvo não pode utilizar nenhuma habilidade.</span></span>";
    $retain = "<span class='debuff tooltip'>Retain<span class='tooltiptext'>Reter: Não descarte essa carta ao final do seu turno.</span></span>";
    $purewater = "<span class='debuff tooltip'>Pure Water<span class='tooltiptext'>Água pura: [CARTA] Retain, Escolha qualquer aliado. Banish</span></span>";
    $bubble = "<span class='debuff tooltip'>Bubble<span class='tooltiptext'>Bolha: Bloqueia 5 de DANO por pilha. Max: 3 pilhas. Se torna BUBBLE BOMB uma vez que atingido 3 Stacks<br>BUBBLE BOMB: No próximo ataque explode e da 20 de DANO em todos inimigos.</span></span>";
    $meditates = "<span class='debuff tooltip'>Meditates<span class='tooltiptext'>Medita: Por 2 turnos, Se atacado enquanto medita, acorda e ganha 3 RAGE. Se não, limpa 1 desvantagem e ganha 1 energia depois que o efeito acaba.</span></span>";
    $clover = "<span class='debuff tooltip'>Clover<span class='tooltiptext'>Trevo: Planta | 35 de Vida | Quando seu turno começa, ganha aleatóriamente 1-2 LEAFS para seu axie. CLOVER desapareçe depois de 4 LEAFS ganhas.</span></span>";
    $leaf = "<span class='debuff tooltip'>Leaf<span class='tooltiptext'>Folha: Regenerar 5 HP no final do seu turno. Pilha máxima: 5</span></span>";
    $trunk = "<span class='debuff tooltip'>Trunk<span class='tooltiptext'>Tronco : Planta | 45 de VIDA | Taunt</span></span>";
    $confused = "<span class='debuff tooltip'>Confused<span class='tooltiptext'>Confusão: [Carta] Não jogavel, Etérea</span></span>";
    $healingboost = "<span class='debuff tooltip'>Healing Boost<span class='tooltiptext'>Aumento de cura: Aumenta o efeito de cartas de cura nessa unidade em 1 de VIDA por pilha</span></span>";
    $mavis = "<span class='debuff tooltip'>Mavis<span class='tooltiptext'>Mavis: Pássaro | 18 de Vida | Quando seu turno começa (antes de comprar cartas). MAVIS reduz 1 de energia de uma carta de ataque aleatória. Carta de Ataque perde 8 de VIDA quando seu turno termina.</span></span>";
    $littlerobin = "<span class='debuff tooltip'>Little Robin<span class='tooltiptext'>Pequeno Robin: Pássaro | 18 de VIDA | companheiros de equipe dão 16 a mais de DANO. Perde 8 de Vida quando seu turno termina.</span></span>";

    $efeitos = array(
        "taunt" => "Taunt",
        "deathmark" => "Death Mark",
        "fear" => "Fear",
        "scry" => "Scry",
        "banish" => "Banish",
        "weak" => "Weak",
        "innate" => "Innate",
        "daze" => "Daze",
        "initial" => "Initial",
        "damage_boost" => "Damage Boost",
        "void" => "Void",
        "sleep" => "Sleep",
        "bleed" => "Bleed",
        "fragile" => "Fragile",
        "feather" => "Feather",
        "poison" => "Poison",
        "vulnerable" => "Vulnerable",
        "hex" => "Hex",
        "burns" => "Burns",
        "fury" => "Fury",
        "disarmed" => "Disarmed",
        "rage" => "Rage",
        "cleanser" => "Cleanser",
        "cleanse" => "Cleanse",
        "dispel" => "Dispel",
        "blackmail" => "Blackmail",
        "stealth" => "Stealth",
        "jinx" => "Jinx",
        "steal" => "Steal",
        "doubt" => "Doubt",
        "mushroom" => "Mushroom",
        "goo" => "Goo",
        "strawberry" => "Strawberry",
        "lumbershield" => "Lumber Shield",
        "stunned" => "Stunned",
        "retain" => "Retain",
        "purewater" => "Pure Water",
        "bubble" => "Bubble",
        "meditates" => "Meditates",
        "clover" => "Clover",
        "leaf" => "Leaf",
        "trunk" => "Trunk",
        "confused" => "Confused",
        "healingboost" => "Healing Boost",
        "mavis" => "Mavis",
        "littlerobin" => "Little Robin"
    );

    ksort($efeitos, SORT_STRING);
    $efeitos_chaves = array_keys($efeitos);

    return view('welcome', compact($efeitos_chaves, 'efeitos'));
});
