<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "alts",
        "description",
        "img",
        "price",
    ];

    protected function casts(): array
    {
        return [
            'alts' => 'array',
        ];
    }

    public function tag() : HasManyThrough
    {
        return $this->hasManyThrough(Tag::class, HasTag::class);
    }

    public function hasTag() : HasMany
    {
        return $this->HasMany(HasTag::class);
    }

    public function commandProduit() : HasMany
    {
        return $this->HasMany(CommandProduit::class);
    }
}
