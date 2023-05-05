<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PulseMeanArterialPressure
 *
 * @property int $id
 * @property int $systolic_blood_pressure
 * @property int $diastolic_blood_pressure
 * @property int $unit_type
 * @property float $pulse_pressure
 * @property float $mean_arterial_pressure
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
}
