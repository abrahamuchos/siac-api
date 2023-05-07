<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\ConsultationHour
 *
 * @property int                             $id
 * @property int                             $doctor_id
 * @property int                             $day_id
 * @property string                          $start_time
 * @property string                          $end_time
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

    protected $fillable = [
        'doctor_id',
        'day_id',
        'start_time',
        'end_time',
    ];

    /**
     * Get doctor
     * @return HasMany
     */
    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'doctor_id');
    }

    /**
     * Get day to attributes
     * @return BelongsTo
     */
    public function dayType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'day_type');
    }

}
