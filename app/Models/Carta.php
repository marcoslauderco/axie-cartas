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
        'partName',
        'cardName',
        'cardType',
        'cardDamage',
        'cardShield',
        'cardHeal',
        'tags',
        'cardImage',
    ];

    public function prunable()
    {
        return static::where('created_at', '<=', now());
    }

    public function cardImage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => str_replace(".png", ".webp", $value),
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
