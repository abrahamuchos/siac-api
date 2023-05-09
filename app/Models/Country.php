<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Country
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $iso3
 * @property string|null $iso2
 * @property string|null $numeric_code
 * @property string|null $phone_code
 * @property string|null $capital
 * @property string|null $region
 * @property string|null $subregion
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereIso2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereIso3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNumericCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePhoneCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSubregion($value)
 * @mixin \Eloquent
 */
class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'iso3',
        'iso2',
        'numeric_code',
        'phone_code',
        'capital',
        'region',
        'subregion',
    ];
    public $timestamps = false;

    /**
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return HasMany
     */
    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    /**
     * @return HasMany
     */
    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }
}
