<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

class ActionController extends Controller
{
    function update()
    {
        Artisan::call('migrate');

        $response = Http::get('https://api.axietech.info/cards/v3-lite');

        $cards = $response->collect('cards');

        if ($response->ok()) {
            Artisan::call('model:prune', array('--model' => Carta::class));
            foreach ($cards as $card) {
                $carta = new Carta([
                    'id' => $card['id'],
                    'class' => $card['class'],
                    'type' => $card['partType'],
                    'card' => $card['partId'],
                    'energy' => $card['cardEnergy'],
                    'description' => ($card['cardText'] ? str_ireplace(["[", "]", "<", ">", "'"], ["{", "}", "{", "}", ""], $card['cardText']) : " "),
                ]);
                var_dump($card);
                $carta->save();
            }
        }
    }

    function seed()
    {
        Artisan::call('db:seed --class=TraducaoSeeder');
    }
}
