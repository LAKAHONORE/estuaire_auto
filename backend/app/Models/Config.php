<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [
        "description",
        "tel_1",
        "tel_2",
        "email",
        "boutique_link",
    ];
}
