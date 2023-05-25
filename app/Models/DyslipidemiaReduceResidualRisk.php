<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\DyslipidemiaReduceResidualRisk
 *
 * @property int                             $id
 * @property int                             $patient_risk_type
 * @property bool                            $tg_hdlc
 * @property int                             $result_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Database\Factories\DyslipidemiaReduceResidualRiskFactory factory($count = null, $state = [])
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
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'patient_risk_type',
        'tg_hdlc',
        'result_type',
    ];

    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    /**
     * Get patient risk to attributes
     * @return BelongsTo
     */
    public function patientRiskType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'patient_risk_type');
    }

    /**
     * Get result to attributes
     * @return BelongsTo
     */
    public function resultType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'result_type');
    }

}
