<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Command extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "livraison",
        "credit_card_id"
    ];

    public function commandProduit () : HasMany
    {
        return $this->hasMany(CommandProduit::class);
    }
}
