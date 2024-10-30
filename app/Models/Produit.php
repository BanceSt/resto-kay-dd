<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function tags() : BelongsToMany
    {
        return $this->BelongsToMany(Tag::class, "has_tags");
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
