<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ConsultationHour
 *
 * @property int $id
 * @property int $doctor_id
 * @property int $day_id
 * @property string $start_time
 * @property string $end_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ConsultationHour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConsultationHour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConsultationHour query()
 * @method static \Illuminate\Database\Eloquent\Builder|ConsultationHour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsultationHour whereDayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsultationHour whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsultationHour whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsultationHour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsultationHour whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsultationHour whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ConsultationHour extends Model
{
    use HasFactory;
}
