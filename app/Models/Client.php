<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "name",
        "first_name",
        "email",
        "telephone"
    ];

    public function reservation() : HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
