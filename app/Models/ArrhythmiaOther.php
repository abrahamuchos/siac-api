<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ArrhythmiaOther
 *
 * @property int    $id
 * @property int    $background_id
 * @property int    $year
 * @property string $pharmacotherapy
 * @property string $other_pharmacotherapy
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaOther newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaOther newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaOther query()
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaOther whereBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaOther whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaOther whereOtherPharmacotherapy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaOther wherePharmacotherapy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaOther whereYear($value)
 * @mixin \Eloquent
 */
class ArrhythmiaOther extends Model
{
    use HasFactory;

    protected $fillable = [
        'background_id',
        'pharmacotherapy',
        'other_pharmacotherapy',
    ];

    /**
     * @return BelongsTo
     */
    public function background(): BelongsTo
    {
        return $this->belongsTo(Background::class);
    }


}
