<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Anthropometry
 *
 * @property int $id
 * @property float $weight
 * @property int $weight_unit_type
 * @property float $size
 * @property int $size_unit_type
 * @property float $abdominal_waist
 * @property int $abdominal_waist_unit_type
 * @property float $bmi_score
 * @property int $bmi_score_unit_type
 * @property float $bsa_score
 * @property int $bsa_score_unit_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry query()
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereAbdominalWaist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereAbdominalWaistUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereBmiScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereBmiScoreUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereBsaScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereBsaScoreUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereSizeUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anthropometry whereWeightUnitType($value)
 * @mixin \Eloquent
 */
class Anthropometry extends Model
{
    use HasFactory;
}
