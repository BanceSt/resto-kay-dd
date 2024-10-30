<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description"
    ];



    public function hasTag () : HasMany
    {
        return $this->HasMany(HasTag::class);
    }

    public function produits() : BelongsToMany
    {
        return $this->belongsToMany(Produit::class, "has_tags");
    }
}
