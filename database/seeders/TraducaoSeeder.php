<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TraducaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("Delete from traducaos");
        DB::table('traducaos')->insert([
            'en' => "Whenever this is drawn, heal 20 HP.",
            'pt' => "Quando comprada cura 20 de vida."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Apply {Fear} for 4 turns.",
            'pt' => "Aplica {!!\$fear!!} por 4 turnos"
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any Ally. Remove all debuffs on target.",
            'pt' => "Mire em qualquer aliado, Remova todos os efeitos negativos do escolhido."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Draw 1 card.",
            'pt' => "Compre uma carta."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Next turn, after the target is attacked, draw 1 card.",
            'pt' => "Mire em qualquer aliado, No próximo turno, depois do escolhido ser atacado, compre 1 carta."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Attack all enemies. Shuffle 1 {Daze} into your opponents discard pile.",
            'pt' => "Ataca todos os inimigos. Embaralhe 1 {!!\$daze!!} no baralho de descarte do oponente."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Next turn, after the target is attacked, apply {Bleed} to the attacker for 4 turns.",
            'pt' => "Mire em qualquer aliado. No próximo turno, depois dp escolhido ser atacado, aplica {!!\$bleed!!} no atacante por 4 turnos."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Apply {Bleed} for 4 turns.",
            'pt' => "Aplica {!!\$bleed!!} por 4 turnos."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Deal 2 hits.",
            'pt' => "Acerte 2 vezes."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Apply 2 {Poison} per Attack Card played this turn.",
            'pt' => "Aplica 2 de {!!\$poison!!} por carta de Ataque jogada nesse turno."
        ]);
        DB::table('traducaos')->insert([
            'en' => "If {Initial}, draw 1 card.",
            'pt' => "Se {!!\$initial!!}, compre 1 carta."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Apply 2 Poison x 6 times to random targets. Heal this Axie for 20 HP.",
            'pt' => "Aplica 2 de {!!\$poison!!} X 6 vezes em um escolhido aleatório. Cura esse Axie em 20 de vida."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Negate 1 next attack on targeted ally.",
            'pt' => "Escolha qualuqer aliado. Negue 1 próximo ataque no aliado escolhido."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Next turn, after the target is attacked, reflect 25% of Shield lost.",
            'pt' => "Escolha qualquer aliado. No próximo turno, depois do escolhido ser atacado, reflete 25% do escudo perdido."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Next attack against the target is reflected for 85 DMG.",
            'pt' => "Escolha qualquer aliado. O próximo ataque contra o escolhido é refletido em 85 de DANO."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Shield your team and apply 1 {Cleanser}.",
            'pt' => "Proteja seu time e aplique 1 {!!\$cleanser!!}"
        ]);
        DB::table('traducaos')->insert([
            'en' => "Deal 4 hits. Priotize target with lowest HP.",
            'pt' => "Acerte 4 vezes. Prioriza o escolhido com menor Vida."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Add 1 {Blackmail} to Opponents hand.",
            'pt' => "Adicione 1 {!!\$blackmail!!} a mão do seu oponente."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Shuffle 1 {Jinx} into your opponents discard pile.",
            'pt' => "Embarahe 1 {!!\$jinx!!} no baralho de descarte do seu oponente"
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally.",
            'pt' => "Escolha qualquer aliado."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Apply {Weak} to this Axie for 2 turns.",
            'pt' => "Aplica {!!\$weak!!} neste Axie por 2 turnos."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Deal 50% more DMG per Energy spent this turn.",
            'pt' => "Dê 50% mais DANO por Energia gasta nesse turno."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Apply {Fear} for 2 turns. If target previously has Fear, deal 50% more DMG.",
            'pt' => "Aplica {!!\$fear!!} por 2 turnos. Se o escolhido já tiver {!!\$fear!!} anteriormente, causa 50% a mais de DANO."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Gain 30 Shield. Apply {Doubt} for 4 turns.",
            'pt' => "Ganha 30 de escudo. Aplica {!!\$doubt!!} por 4 turnos."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Summon a {Mushroom}.",
            'pt' => "Invoque um {!!\$mushroom!!}"
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Next turn, after the target is attacked, shuffle 1 {Goo} into your opponents discard pile.",
            'pt' => "Escolha qualquer aliado. No próximo turno, depois que o escolhido for atacado, embaralhe 1 {!!\$goo!!} no baralho de descarte do seu oponente."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Deal 25% more DMG to shield.",
            'pt' => "Dê 25% a mais de DANO em escudo."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Next turn, apply 5 {Damage Boost} to shielded target if its shield is broken.",
            'pt' => "Escolha qualquer aliado. No próximo turno, aplica 5 {!!\$damage_boost!!} ao escolhido com escudo se o seu escudo estiver quebrado."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Next turn, after an ally is attacked, add 1 {Lumber Shield} to your hand.",
            'pt' => "Escolha qualquer aliado. No próximo turno, depois que algum aliado for atacado, adicione 1 {!!\$lumbershield!!} a sua mão."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Attack all enemies.",
            'pt' => "Ataca todos inimigos."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Deal 3 hits.",
            'pt' => "Acerte 3 vezes."
        ]);
        DB::table('traducaos')->insert([
            'en' => "After your opponent summons a unit, deal 25 DMG to it.",
            'pt' => "Depois que seu oponente incovar uma unidade, cause 25 de DANO a ela."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Next turn, after an ally is attacked, add 1 {Pure Water} to your hand.",
            'pt' => "Escolha qualquer aliado. No próximo turno, depois que algum aliado for atacado, adicione 1 {!!\$purewater!!}  a sua mão."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Deal pure DMG. Apply {Bleed} for 4 turns.",
            'pt' => "Da DANO puro. Aplica {!!\$bleed!!} por 4 turnos."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Randomly deal 3 hits. Gain 1 {Rage} per Enemy hit.",
            'pt' => "De 3 golpes aleatórios. Ganha 1 {!!\$rage!!} por inimigo atingido."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Target gains 2 {Bubble}.",
            'pt' => "Escolha qualquer aliado. o Escplhido ganha 2 {!!\$bubble!!}"
        ]);
        DB::table('traducaos')->insert([
            'en' => "Summon 1 {Clover}.",
            'pt' => "Invoque 1 {!!\$clover!!}."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Randomly deal 4 hits. Shuffle 1 {Goo} per enemy hit into opponents discard pile.",
            'pt' => "Da 4 golpes aleatórios. Compre 1 {!!\$goo!!} por inimigo atingido no baralho de descarte do oponente."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Attack all enemies. Deal 3 bonus DMG per Card in your hand.",
            'pt' => "Ataca todos os inimigos. Dê 3 de bônus de DANO por carta em sua mão."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Randomly apply effect 4 times to your team. Heal and apply 1 {Damage Boost} each time.",
            'pt' => "Aplique o efeito aleatoriamente 4 vezes em sua equipe.  Cure e aplique 1 {!!\$damage_boost!!} a cada vez."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Your team gains 1 {Bubble}.",
            'pt' => "Seu time ganha 1 {!!\$bubble!!}."
        ]);
        DB::table('traducaos')->insert([
            'en' => "This Axie loses 75 HP. Summon a {Trunk}.",
            'pt' => "Esse Axie perde 75 de VIDA. Invoca um {!!\$trunk!!}"
        ]);
        DB::table('traducaos')->insert([
            'en' => "{Innate}. Select and add 1 copy of this Axies Skill Card to your hand. {Banish}.",
            'pt' => "{!!\$innate!}}. Selecione e adicione uma cópia de uma carta de 'Skill' desse axie para sua mão. {!!\$banish!!}"
        ]);
        DB::table('traducaos')->insert([
            'en' => "{Scry} 2 cards. Gain 1 Energy if you discard a skill card upon scrying.",
            'pt' => "{!!\$scry!!} 2 cartas. Ganha 1 de energia se descartar 1 carta de 'skill' depois de ver as cartas."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Whenever this is drawn, gain 30 Shield.",
            'pt' => "Sempre que for comprada, ganha 30 de escudo."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Randomly deal 2 hits. Consume up to 3 {Leaf}s to deal 5 DMG per {Leaf} consumed.",
            'pt' => "Dê 2 golpes aleatórios. Consome até 3 {!!\$leaf!!}s para dar 5 de DANO por {!!\$leaf!!} consumido."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Gain 1 Energy if this Axies HP is full.",
            'pt' => "Ganha 1 de Energia se a VIDA desse Axie estiver cheia."
        ]);
        DB::table('traducaos')->insert([
            'en' => "All Nut Cracker cards of this Axie gain 6 DMG this battle.",
            'pt' => "Todas as cartas 'Nut Cracker' deste Axie ganham 6 de DANO nesta batalha."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Deal 15 bonus DMG against Bleeding Enemy.",
            'pt' => "Da 15 de bônus de DANO contra inimigos 'Bleeding'."
        ]);
        DB::table('traducaos')->insert([
            'en' => "All Little Owl cards of this Axie gain 6 DMG this battle.",
            'pt' => "Todas as cartas 'Little Owl' deste Axie ganham 6 de DANO nesta batalha."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Apply {Weak} for 2 turns. If target previously has {Weak}, deal 15 more DMG.",
            'pt' => "Aplica {!!\$Weak!!} por 2 turnos. Se o escolhido já tiver {!!\$Weak!!} anteriormente, causa 15 a mais de DANO."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Discard up to 2 cards then draw that many. {Banish}.",
            'pt' => "Descarte até 2 cartas então compre a mesma quantidade. {!!\$banish!!}"
        ]);
        DB::table('traducaos')->insert([
            'en' => "Apply {Fragile} for 4 turns.",
            'pt' => "Aplica {!!\$fragile!!} por 4 turnos."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Heal your team. If {Initial}, remove 1 Curse Card from your deck.",
            'pt' => "Cura seu time. Se {!!\$initial!!}, remove 1 'Curse Card' do seu baralho."
        ]);
        DB::table('traducaos')->insert([
            'en' => "{Innate}. Apply 2 {Poison} and {Sleep} for 2 turns to a random enemy. {Banish}.",
            'pt' => "{!!\$innate!!}. Aplica 2 {!!\$poison!!} e {!!\$sleep!!} por 2 turnos em um inimigo aleatório. {!!\$banish!!}"
        ]);
        DB::table('traducaos')->insert([
            'en' => "Target any ally. Whenever you play a card this battle, heal this Axie 10 HP.",
            'pt' => "Escolha qualquer aliado. Sempre que jogar essa carta em batalha, cura esse Axie em 10 de VIDA."
        ]);
        DB::table('traducaos')->insert([
            'en' => "{Cleanse} 2 debuffs. Gain 2 {Cleanser}.",
            'pt' => "{!!\$cleanse!!} 2 desvantagens. Ganha 2 {!!\$cleanser!!}"
        ]);
        DB::table('traducaos')->insert([
            'en' => "Apply 2 {Poison} and {Bleed} for 4 turns to a random Enemy.",
            'pt' => "Aplica 2 {!!\$poison!!} e {!!\$bleed!!} por 4 turnos em um inimigo aleatório."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Apply 3 {Poison} to all Enemies. Heal this Axie for 30 HP.",
            'pt' => "plica 3 {!!\$poison!!} em todos os inimigos. Cura esse Axie em 30 de VIDA."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Shuffle 3 {Confused} into your opponents discard pile.",
            'pt' => "mbaralhe 3 {!!\$confused!!} no baralho de discarte do oponete."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Heal your team. Heal for 4 bonus HP per Card in your hand.",
            'pt' => "Cura seu time. Cura um bônus de 4 de VIDA por cada carta em sua mão."
        ]);
        DB::table('traducaos')->insert([
            'en' => "Draw 1 card. Gain 3 {Damage Boost}.",
            'pt' => "Compra 1 carta. Ganha 3 {!!\$damage_boost!!}."
        ]);
        DB::table('traducaos')->insert([
            'en' => "If Initial, this Axie {Meditate}s.",
            'pt' => "Se {!!\$initial!!}, esse Axie {!!\$meditates!!}."
        ]);
        DB::table('traducaos')->insert([
            'en' => "",
            'pt' => ""
        ]);
    }
}
