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

    $taunt = "<span class='debuff tooltip'>Taunt<span class='tooltiptext'>Taunt faz tal coisa</span></span>";
    $deathmark = "<span class='debuff tooltip'>Death Mark<span class='tooltiptext'>Marca da Morte: Leva mais dano</span></span>";
    $fear = "<span class='debuff tooltip'>Fear<span class='tooltiptext'>Medo: Erra o próximo ataque</span></span>";
    $scry = "<span class='debuff tooltip'>Scry<span class='tooltiptext'>Vidência: Veja as próxima cartas a serem compradas</span></span>";
    $banish = "<span class='debuff tooltip'>Banish<span class='tooltiptext'>Banir: Essa carta é banida e não pode mais ser comprada.</span></span>";
    $weak = "<span class='debuff tooltip'>Weak<span class='tooltiptext'>Fraquesa: Sofre mais dano</span></span>";
    $innate = "<span class='debuff tooltip'>Innate<span class='tooltiptext'>O que o Innate faz</span></span>";
    $daze = "<span class='debuff tooltip'>Daze<span class='tooltiptext'>Atordoa</span></span>";
    $initial = "<span class='debuff tooltip'>Initial<span class='tooltiptext'>Inicial: Primeira carta jogada.</span></span>";

    return view('welcome', compact(
        'taunt',
        'deathmark',
        'fear',
        'scry',
        'banish',
        'weak',
        'innate',
        'daze',
        'initial'
    ));
});
