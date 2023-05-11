<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\MedicalUnitDoctor
 *
 * @property int                             $id
 * @property int                             $doctor_id
 * @property int                             $medical_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalUnitDoctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalUnitDoctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalUnitDoctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalUnitDoctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalUnitDoctor whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalUnitDoctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalUnitDoctor whereMedicalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalUnitDoctor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MedicalUnitDoctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'medical_id',
    ];


    /**
     * @return HasMany
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    /**
     * @return BelongsToMany
     */
    public function patients(): BelongsToMany
    {
        return $this->belongsToMany(Patient::class, 'doctor_patient');
    }

    /**
     * @return BelongsTo
     */
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    /**
     * @return BelongsTo
     */
    public function medicalUnit(): BelongsTo
    {
        return $this->belongsTo(User::class, 'medical_id');
    }



}
