<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\FindRisk
 *
 * @property int                             $id
 * @property int                             $age
 * @property float                           $bmi
 * @property bool                            $hta
 * @property bool                            $high_blood_glucose
 * @property int                             $physical_activity_type
 * @property bool                            $consumption_vegetables
 * @property int                             $family_diabetic_type
 * @property float                           $score
 * @property float                           $risk_percentage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk query()
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereBmi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereConsumptionVegetables($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereFamilyDiabeticType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereHighBloodGlucose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereHta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk wherePhysicalActivityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereRiskPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FindRisk whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FindRisk extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'age',
        'bmi',
        'hta',
        'high_blood_glucose',
        'physical_activity_type',
        'consumption_vegetable',
        'family_diabetic_type',
        'score',
        'risk_percentage',
    ];

    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    /**
     * Get physical activity type to attributes
     * @return BelongsTo
     */
    public function physicalActivityType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'physical_activity_type');
    }

    /**
     * Get family diabetic type to attributes
     * @return BelongsTo
     */
    public function familyDiabeticType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'family_diabetic_type');
    }


}
