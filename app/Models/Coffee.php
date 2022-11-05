<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Coffee
 *
 * @property int $id
 * @property string $name
 * @property string $roaster
 * @property string $country
 * @property string $species
 * @property string|null $altitude
 * @property string $roast_level
 * @property string $roast_date
 * @property mixed $tasting_notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Brew[] $brews
 * @property-read int|null $brews_count
 *
 * @method static \Database\Factories\CoffeeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereAltitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereRoastDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereRoastLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereRoaster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereSpecies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereTastingNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coffee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Coffee extends Model
{
    use HasFactory;

    protected $casts = [
        'tasting_notes' => 'array',
    ];

    public function brews()
    {
        return $this->hasMany(Brew::class);
    }
}
