<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\MassPrunable;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    use HasFactory, MassPrunable;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = [
        'id',
        'class',
        'type',
        'card',
        'energy',
        'description',
    ];

    public function prunable()
    {
        return static::where('created_at', '<=', now());
    }

    private function cardMutator($value,  $attributes)
    {
        $retorno = str_replace($attributes['type'] . "-", "", $value);
        if (
            $retorno == "leaf-bug" ||
            $retorno == 'nut-cracker' ||
            $retorno == 'kotaro' ||
            $retorno == 'little-owl' ||
            $retorno == 'puppy' ||
            $retorno == 'peace-maker' ||
            $retorno == 'anemone'
        ) {
            $retorno = $retorno . "-" . $attributes['type'];
        }
        return $retorno;
    }

    public function card(): Attribute
    {
        return Attribute::make(
            get: fn ($value,  $attributes) => self::cardMutator($value, $attributes),
        );
    }

    public function class(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtolower($value),
        );
    }

    public function type(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtolower($value),
        );
    }
}
