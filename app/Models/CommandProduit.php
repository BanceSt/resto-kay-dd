<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandProduit extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $fillable = [
        'produit_id',
        'command_id',
        "menu"
    ];
    protected $primaryKey = [
        'produit_id',
        'command_id'
    ];
}
