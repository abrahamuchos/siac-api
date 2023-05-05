<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DyslipidemiaReduceResidualRisk
 *
 * @property int $id
 * @property int $patient_risk_type
 * @property bool $tg_hdlc
 * @property int $result_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|DyslipidemiaReduceResidualRisk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DyslipidemiaReduceResidualRisk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DyslipidemiaReduceResidualRisk query()
 * @method static \Illuminate\Database\Eloquent\Builder|DyslipidemiaReduceResidualRisk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DyslipidemiaReduceResidualRisk whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DyslipidemiaReduceResidualRisk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DyslipidemiaReduceResidualRisk wherePatientRiskType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DyslipidemiaReduceResidualRisk whereResultType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DyslipidemiaReduceResidualRisk whereTgHdlc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DyslipidemiaReduceResidualRisk whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DyslipidemiaReduceResidualRisk extends Model
{
    use HasFactory;
}
