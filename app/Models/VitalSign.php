<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\VitalSign
 *
 * @property int $id
 * @property float|null $temp
 * @property int $temp_unit_type
 * @property float|null $sat
 * @property float|null $sitting_breathing_frequency
 * @property int|null $sitting_breathing_frequency_unit_type
 * @property float|null $sitting_heart_rate
 * @property int|null $sitting_heart_rate_unit_type
 * @property float|null $sitting_pas_right_arm
 * @property int|null $sitting_pas_right_arm_unit_type
 * @property float|null $sitting_pad_right_arm
 * @property int $sitting_pad_right_arm_unit_type
 * @property float|null $sitting_pas_left_arm
 * @property int $sitting_pas_left_arm_unit_type
 * @property float|null $sitting_pad_left_arm
 * @property int $sitting_pad_left_arm_unit_type
 * @property float|null $lying_down_breathing_frequency
 * @property int $lying_down_breathing_frequency_unit_type
 * @property float|null $lying_down_heart_rate
 * @property int $lying_down_heart_rate_unit_type
 * @property float|null $lying_down_pas_right_arm
 * @property int $lying_down_pas_right_arm_unit_type
 * @property float|null $lying_down_pad_right_arm
 * @property int $lying_down_pad_right_arm_unit_type
 * @property float|null $lying_down_pas_left_arm
 * @property int $lying_down_pas_left_arm_unit_type
 * @property float|null $lying_down_pad_left_arm
 * @property int $lying_down_pad_left_arm_unit_type
 * @property float|null $standing_breathing_frequency
 * @property int $standing_breathing_frequency_unit_type
 * @property float|null $standing_heart_rate
 * @property int $standing_heart_rate_unit_type
 * @property float|null $standing_pas_right_arm
 * @property int $standing_pas_right_arm_unit_type
 * @property float|null $standing_pad_right_arm
 * @property int $standing_pad_right_arm_unit_type
 * @property float|null $standing_pas_left_arm
 * @property int $standing_pas_left_arm_unit_type
 * @property float|null $standing_pad_left_arm
 * @property int $standing_pad_left_arm_unit_type
 * @property float|null $avg_pad
 * @property float|null $avg_pas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign query()
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereAvgPad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereAvgPas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownBreathingFrequency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownBreathingFrequencyUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownHeartRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownHeartRateUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownPadLeftArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownPadLeftArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownPadRightArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownPadRightArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownPasLeftArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownPasLeftArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownPasRightArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereLyingDownPasRightArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingBreathingFrequency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingBreathingFrequencyUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingHeartRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingHeartRateUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingPadLeftArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingPadLeftArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingPadRightArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingPadRightArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingPasLeftArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingPasLeftArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingPasRightArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereSittingPasRightArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingBreathingFrequency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingBreathingFrequencyUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingHeartRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingHeartRateUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingPadLeftArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingPadLeftArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingPadRightArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingPadRightArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingPasLeftArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingPasLeftArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingPasRightArm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereStandingPasRightArmUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereTemp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereTempUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VitalSign whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class VitalSign extends Model
{
    use HasFactory;
}
