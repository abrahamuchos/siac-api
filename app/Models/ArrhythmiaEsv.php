<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ArrhythmiaEsv
 *
 * @property int    $id
 * @property int    $background_id
 * @property int    $year
 * @property string $pharmacotherapy
 * @property string $other_pharmacotherapy
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaEsv newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaEsv newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaEsv query()
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaEsv whereBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaEsv whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaEsv whereOtherPharmacotherapy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaEsv wherePharmacotherapy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArrhythmiaEsv whereYear($value)
 * @mixin \Eloquent
 */
class ArrhythmiaEsv extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'background_id',
        'year',
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
