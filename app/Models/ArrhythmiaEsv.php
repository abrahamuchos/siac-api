<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ArrhythmiaEsv
 *
 * @property int $id
 * @property int $background_id
 * @property int $year
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
}
