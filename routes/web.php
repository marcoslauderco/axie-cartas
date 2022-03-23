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

    $taunt = "<span class='debuff tooltip'>Taunt<span class='tooltiptext'>Insulto</span></span>";
    $deathmark = "<span class='debuff tooltip'>Death Mark<span class='tooltiptext'>Marca da Morte: Leva mais dano</span></span>";
    $fear = "<span class='debuff tooltip'>Fear<span class='tooltiptext'>Medo: Erra o próximo ataque</span></span>";
    $scry = "<span class='debuff tooltip'>Scry<span class='tooltiptext'>Vidência: Veja as próxima cartas a serem compradas</span></span>";
    $banish = "<span class='debuff tooltip'>Banish<span class='tooltiptext'>Banir: Essa carta é banida e não pode mais ser comprada.</span></span>";
    $weak = "<span class='debuff tooltip'>Weak<span class='tooltiptext'>Fraquesa: Sofre mais dano</span></span>";
    $innate = "<span class='debuff tooltip'>Innate<span class='tooltiptext'>Inato</span></span>";
    $daze = "<span class='debuff tooltip'>Daze<span class='tooltiptext'>Atordoa</span></span>";
    $initial = "<span class='debuff tooltip'>Initial<span class='tooltiptext'>Inicial: Primeira carta jogada.</span></span>";
    $damage_boost = "<span class='debuff tooltip'>Damage Boost<span class='tooltiptext'>Aumento de dano.</span></span>";
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
    $dispel = "<span class='debuff tooltip'>Dispel<span class='tooltiptext'>Dissipar</span></span>";

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
        'dispel',
    ));
});
