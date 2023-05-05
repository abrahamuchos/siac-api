<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Electrocardiogram
 *
 * @property int $id
 * @property int|null $rhythm_type
 * @property string|null $rhythm_type_description
 * @property int|null $rhythm_frequency
 * @property int|null $rhythm_frequency_unit_type
 * @property int|null $rhythm_pr
 * @property int|null $rhythm_pr_unit_type
 * @property int|null $rhythm_qrs
 * @property int|null $rhythm_qrs_unit_type
 * @property int|null $axes_p
 * @property int|null $axes_p_unit_type
 * @property int|null $axes_t
 * @property int|null $axes_t_unit_type
 * @property int|null $axes_qt
 * @property int|null $axes_qt_unit_type
 * @property string|null $description
 * @property string|null $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram query()
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereAxesP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereAxesPUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereAxesQt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereAxesQtUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereAxesT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereAxesTUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereRhythmFrequency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereRhythmFrequencyUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereRhythmPr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereRhythmPrUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereRhythmQrs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereRhythmQrsUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereRhythmType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereRhythmTypeDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Electrocardiogram whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Electrocardiogram extends Model
{
    use HasFactory;
}
