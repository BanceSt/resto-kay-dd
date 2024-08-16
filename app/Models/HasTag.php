<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasTag extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'produit_id',
        'tag_id'
    ];
    protected $primaryKey = [
        'produit_id',
        'tag_id'
    ];

    public function getKeyName()
    {
    return ['produit_id', 'tag_id'];
    }


    public function produit() : BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }

    public function tag() : BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }


}
