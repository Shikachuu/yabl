<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    public function brews()
    {
        return $this->hasMany(Brew::class);
    }
}
