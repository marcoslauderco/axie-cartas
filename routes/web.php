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
    $daze = "<span class='debuff tooltip'>Daze<span class='tooltiptext'>Atordoa: Carta não jogavel</span></span>";
    $initial = "<span class='debuff tooltip'>Initial<span class='tooltiptext'>Inicial: Primeira carta jogada no turno.</span></span>";
    $damage_boost = "<span class='debuff tooltip'>Damage Boost<span class='tooltiptext'>Aumento de dano: O alvo tem um aumento de DANO de ataque em 1 por estacado.</span></span>";
    $void = "<span class='debuff tooltip'>Void<span class='tooltiptext'>Vazio</span></span>";
    $sleep = "<span class='debuff tooltip'>Sleep<span class='tooltiptext'>Dormir</span></span>";
    $bleed = "<span class='debuff tooltip'>Bleed<span class='tooltiptext'>Sangrar</span></span>";
    $fragile = "<span class='debuff tooltip'>Fragile<span class='tooltiptext'>Fragil</span></span>";
    $feather = "<span class='debuff tooltip'>Feather<span class='tooltiptext'>Pena</span></span>";
    $poison = "<span class='debuff tooltip'>Poison<span class='tooltiptext'>Veneno: perde vida</span></span>";
    $vulnerable = "<span class='debuff tooltip'>Vulnerable<span class='tooltiptext'>Vuneravel</span></span>";
    $hex = "<span class='debuff tooltip'>Hex<span class='tooltiptext'>Feitiço</span></span>";
    $burns = "<span class='debuff tooltip'>Burns<span class='tooltiptext'>Queimando</span></span>";
    $fury = "<span class='debuff tooltip'>Fury<span class='tooltiptext'>Fúria</span></span>";
    $disarmed = "<span class='debuff tooltip'>Disarmed<span class='tooltiptext'>Desarmado</span></span>";
    $rage = "<span class='debuff tooltip'>Rage<span class='tooltiptext'>Ráiva</span></span>";
    $cleanser = "<span class='debuff tooltip'>Cleanser<span class='tooltiptext'>Limpador</span></span>";
    $cleanse = "<span class='debuff tooltip'>Cleanse<span class='tooltiptext'>Limpa</span></span>";
    $dispel = "<span class='debuff tooltip'>Dispel<span class='tooltiptext'>Dissipar</span></span>";
    $blackmail = "<span class='debuff tooltip'>Blackmail<span class='tooltiptext'>Chantagem</span></span>";
    $stealth = "<span class='debuff tooltip'>Stealth<span class='tooltiptext'>Furtividade</span></span>";
    $jinx = "<span class='debuff tooltip'>Jinx<span class='tooltiptext'>Azar</span></span>";
    $steal = "<span class='debuff tooltip'>Steal<span class='tooltiptext'>Roubar</span></span>";
    $doubt = "<span class='debuff tooltip'>Doubt<span class='tooltiptext'>Dúvida</span></span>";
    $mushroom = "<span class='debuff tooltip'>Mushroom<span class='tooltiptext'>Cogumelo</span></span>";
    $goo = "<span class='debuff tooltip'>Goo<span class='tooltiptext'>Gosma</span></span>";
    $strawberry = "<span class='debuff tooltip'>Strawberry<span class='tooltiptext'>Morango</span></span>";
    $lumbershield = "<span class='debuff tooltip'>Lumber Shield<span class='tooltiptext'>Escudo de Madeira</span></span>";
    $stunned = "<span class='debuff tooltip'>Stunned<span class='tooltiptext'>Atordoado</span></span>";
    $retain = "<span class='debuff tooltip'>Retain<span class='tooltiptext'>Reter</span></span>";
    $purewater = "<span class='debuff tooltip'>Pure Water<span class='tooltiptext'>Água pura</span></span>";
    $bubble = "<span class='debuff tooltip'>Bubble<span class='tooltiptext'>Bolha</span></span>";
    $meditates = "<span class='debuff tooltip'>Meditates<span class='tooltiptext'>Medita</span></span>";
    $clover = "<span class='debuff tooltip'>Clover<span class='tooltiptext'>Trevo</span></span>";
    $leaf = "<span class='debuff tooltip'>Leaf<span class='tooltiptext'>Folha</span></span>";
    $trunk = "<span class='debuff tooltip'>Trunk<span class='tooltiptext'>Tronco</span></span>";
    $confused = "<span class='debuff tooltip'>Confused<span class='tooltiptext'>Confusão</span></span>";
    $bubble = "<span class='debuff tooltip'>Bubble<span class='tooltiptext'>Bolha</span></span>";
    $healingboost = "<span class='debuff tooltip'>Healing Boost<span class='tooltiptext'>Aumento de cura</span></span>";
    $mavis = "<span class='debuff tooltip'>Mavis<span class='tooltiptext'>Mavis</span></span>";
    $littlerobin = "<span class='debuff tooltip'>Little Robin<span class='tooltiptext'>Pequeno Robin</span></span>";

    return view('welcome', compact(
        'taunt',
        'deathmark',
        'fear',
        'scry',
        'banish',
        'weak',
        'innate',
        'daze',
        'initial',
        'damage_boost',
        'void',
        'sleep',
        'bleed',
        'fragile',
        'feather',
        'poison',
        'vulnerable',
        'hex',
        'burns',
        'fury',
        'disarmed',
        'rage',
        'cleanser',
        'cleanse',
        'dispel',
        'blackmail',
        'stealth',
        'jinx',
        'steal',
        'doubt',
        'mushroom',
        'goo',
        'strawberry',
        'lumbershield',
        'stunned',
        'retain',
        'purewater',
        'bubble',
        'meditates',
        'clover',
        'leaf',
        'trunk',
        'confused',
        'bubble',
        'healingboost',
        'mavis',
        'littlerobin'
    ));
});
