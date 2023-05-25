<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\CustomTreatment
 *
 * @property int                             $id
 * @property int                             $medical_record_id
 * @property string                          $family
 * @property string                          $name
 * @property string|null                     $dose
 * @property int|null                        $unit_type
 * @property string                          $frequency
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment whereDose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment whereFrequency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment whereMedicalRecordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment whereUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTreatment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CustomTreatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'medical_record_id',
        'family',
        'name',
        'dose',
        'unit_type',
        'frequency',
    ];

    /**
     * @return BelongsTo
     */
    public function medicalRecord(): BelongsTo
    {
        return $this->belongsTo(MedicalRecord::class);
    }

    /**
     * Get unit to attributes
     * @return BelongsTo
     */
    public function unitType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'unit_type');
    }
}
