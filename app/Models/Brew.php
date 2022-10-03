<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brew extends Model
{
    use HasFactory;

    public function brewer()
    {
        return $this->belongsTo(Brewer::class);
    }

    public function coffee()
    {
        return $this->belongsTo(Coffee::class);
    }
}
