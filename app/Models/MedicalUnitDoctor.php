<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MedicalUnitDoctor
 *
 * @property int $id
 * @property int $doctor_id
 * @property int $medical_id
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
}
