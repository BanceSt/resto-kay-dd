<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable =[
        "user_id",
        "name",
        "last_name",
        "objet",
        "message",
        "respond",
        "status"
    ];

    public function is_login() {
        return auth()->check();
    }
}
