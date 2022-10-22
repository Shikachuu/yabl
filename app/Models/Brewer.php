<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Brewer
 *
 * @property int $id
 * @property string $name
 * @property string $category
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Brew[] $brews
 * @property-read int|null $brews_count
 *
 * @method static \Database\Factories\BrewerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Brewer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brewer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brewer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brewer whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brewer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brewer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brewer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brewer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Brewer extends Model
{
    use HasFactory;

    public function brews()
    {
        return $this->hasMany(Brew::class);
    }
}
