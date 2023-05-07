<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\PulseMeanArterialPressure
 *
 * @property int                             $id
 * @property int                             $systolic_blood_pressure
 * @property int                             $diastolic_blood_pressure
 * @property int                             $unit_type
 * @property float                           $pulse_pressure
 * @property float                           $mean_arterial_pressure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure query()
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure whereDiastolicBloodPressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure whereMeanArterialPressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure wherePulsePressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure whereSystolicBloodPressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure whereUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseMeanArterialPressure whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PulseMeanArterialPressure extends Model
{
    use HasFactory;

    protected $fillable = [
        'systolic_blood_pressure',
        'diastolic_blood_pressure',
        'unit_type',
        'pulse_pressure',
        'mean_arterial_pressure',
    ];

    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    /**
     * Get unit type to attributes
     * @return BelongsTo
     */
    public function unitType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'unit_type');
    }


}
