<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\InterheartRisk
 *
 * @property int                             $id
 * @property int                             $age
 * @property int                             $uses_tobacco_type
 * @property int                             $cant_tobacco_type
 * @property int                             $passive_smoker_type
 * @property bool                            $diabetic
 * @property bool                            $hta
 * @property bool                            $family_history
 * @property int                             $waist_hip_ratio_type
 * @property int                             $psychosocial_factor_type
 * @property float                           $score
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Database\Factories\InterheartRiskFactory factory($count = null, $state = [])
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
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'age',
        'use_tobacco_type',
        'cant_tobacco_type',
        'passive_smoker_type',
        'diabetic',
        'hta',
        'family_history',
        'waist_hip_ratio_type',
        'psychosocial_factor_type',
        'score',
    ];

    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    /**
     * Get use tobacco type to attributes
     * @return BelongsTo
     */
    public function useTobaccoType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'use_tobacco_type');
    }

    /**
     * Get cant tobacco type to attributes
     * @return BelongsTo
     */
    public function cantTobaccoType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'cant_tobacco_type');
    }

    /**
     * Get passive smoker type to attributes
     * @return BelongsTo
     */
    public function passiveSmokerType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'passive_smoker_type');
    }

    /**
     * Get waist hip ratio type to attributes
     * @return BelongsTo
     */
    public function waistHipType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'waist_hip_ratio_type');
    }

    /**
     * Get psychosocial factor type to attributes
     * @return BelongsTo
     */
    public function psychoFactorType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'psychosocial_factor_type');
    }





}
