<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "user_id",
        "reserved_at",
        "numero_table",
        "specials_need",
        'name',
        'last_name',
        'email',
        'password',
        'phone'
    ];

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'numero_table' => 'array',
        ];
    }
}
