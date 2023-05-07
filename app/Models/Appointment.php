<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Appointment
 *
 * @property int                             $id
 * @property int                             $medical_unit_doctor_id
 * @property int                             $patient_id
 * @property string                          $start_time
 * @property string                          $end_time
 * @property string                          $reason
 * @property string                          $description
 * @property bool                            $is_open
 * @property int                             $reason_deleted_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereMedicalUnitDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereReasonDeletedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'medical_unit_doctor_id',
        'patient_id',
        'start_time',
        'end_time',
        'reason',
        'description',
        'is_open',
        'reason_deleted_type',
    ];

    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    /**
     * @return BelongsTo
     */
    public function medicalUnitDoctor(): BelongsTo
    {
        return $this->belongsTo(MedicalUnitDoctor::class);
    }

    /**
     * @return BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);

    }

    /**
     * Get unit to attributes
     * @return BelongsTo
     */
    public function reasonDeleteType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'reason_deleted_type');
    }




}
