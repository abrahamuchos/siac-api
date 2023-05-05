<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\InterheartRisk
 *
 * @property int $id
 * @property int $age
 * @property int $uses_tobacco_type
 * @property int $cant_tobacco_type
 * @property int $passive_smoker_type
 * @property bool $diabetic
 * @property bool $hta
 * @property bool $family_history
 * @property int $waist_hip_ratio_type
 * @property int $psychosocial_factor_type
 * @property float $score
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk query()
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereCantTobaccoType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereDiabetic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereFamilyHistory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereHta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk wherePassiveSmokerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk wherePsychosocialFactorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereUsesTobaccoType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InterheartRisk whereWaistHipRatioType($value)
 * @mixin \Eloquent
 */
class InterheartRisk extends Model
{
    use HasFactory;
}
