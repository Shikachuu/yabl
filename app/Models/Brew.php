<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Brew
 *
 * @property int $id
 * @property int $coffee_id
 * @property int $brewer_id
 * @property string $grinder
 * @property float $clicks
 * @property float $dose
 * @property float $yield
 * @property string $time
 * @property string $description
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brewer|null $brewer
 * @property-read \App\Models\Coffee|null $coffee
 *
 * @method static \Database\Factories\BrewFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brew newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brew query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereBrewerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereClicks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereCoffeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereDose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereGrinder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brew whereYield($value)
 * @mixin \Eloquent
 */
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
