<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\VitalSign
 *
 * @property int                             $id
 * @property float|null                      $temp
 * @property int                             $temp_unit_type
 * @property float|null                      $sat
 * @property float|null                      $sitting_breathing_frequency
 * @property int|null                        $sitting_breathing_frequency_unit_type
 * @property float|null                      $sitting_heart_rate
 * @property int|null                        $sitting_heart_rate_unit_type
 * @property float|null                      $sitting_pas_right_arm
 * @property int|null                        $sitting_pas_right_arm_unit_type
 * @property float|null                      $sitting_pad_right_arm
 * @property int                             $sitting_pad_right_arm_unit_type
 * @property float|null                      $sitting_pas_left_arm
 * @property int                             $sitting_pas_left_arm_unit_type
 * @property float|null                      $sitting_pad_left_arm
 * @property int                             $sitting_pad_left_arm_unit_type
 * @property float|null                      $lying_down_breathing_frequency
 * @property int                             $lying_down_breathing_frequency_unit_type
 * @property float|null                      $lying_down_heart_rate
 * @property int                             $lying_down_heart_rate_unit_type
 * @property float|null                      $lying_down_pas_right_arm
 * @property int                             $lying_down_pas_right_arm_unit_type
 * @property float|null                      $lying_down_pad_right_arm
 * @property int                             $lying_down_pad_right_arm_unit_type
 * @property float|null                      $lying_down_pas_left_arm
 * @property int                             $lying_down_pas_left_arm_unit_type
 * @property float|null                      $lying_down_pad_left_arm
 * @property int                             $lying_down_pad_left_arm_unit_type
 * @property float|null                      $standing_breathing_frequency
 * @property int                             $standing_breathing_frequency_unit_type
 * @property float|null                      $standing_heart_rate
 * @property int                             $standing_heart_rate_unit_type
 * @property float|null                      $standing_pas_right_arm
 * @property int                             $standing_pas_right_arm_unit_type
 * @property float|null                      $standing_pad_right_arm
 * @property int                             $standing_pad_right_arm_unit_type
 * @property float|null                      $standing_pas_left_arm
 * @property int                             $standing_pas_left_arm_unit_type
 * @property float|null                      $standing_pad_left_arm
 * @property int                             $standing_pad_left_arm_unit_type
 * @property float|null                      $avg_pad
 * @property float|null                      $avg_pas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
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
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'temp',
        'temp_unit_type',
        'sat',
        'sitting_breathing_frequency',
        'sitting_breathing_frequency_unit_type',
        'sitting_heart_rate',
        'sitting_heart_rate_unit_type',
        'sitting_pas_right_arm',
        'sitting_pas_right_arm_unit_type',
        'sitting_pad_right_arm',
        'sitting_pad_right_arm_unit_type',
        'sitting_pas_left_arm',
        'sitting_pas_left_arm_unit_type',
        'sitting_pad_left_arm',
        'sitting_pad_left_arm_unit_type',
        'lying_down_breathing_frequency',
        'lying_down_breathing_frequency_unit_type',
        'lying_down_heart_rate',
        'lying_down_heart_rate_unit_type',
        'lying_down_pas_right_arm',
        'lying_down_pas_right_arm_unit_type',
        'lying_down_pad_right_arm',
        'lying_down_pad_right_arm_unit_type',
        'lying_down_pas_left_arm',
        'lying_down_pas_left_arm_unit_type',
        'lying_down_pad_left_arm',
        'lying_down_pad_left_arm_unit_type',
        'standing_breathing_frequency',
        'standing_breathing_frequency_unit_type',
        'standing_heart_rate',
        'standing_heart_rate_unit_type',
        'standing_pas_right_arm',
        'standing_pas_right_arm_unit_type',
        'standing_pad_right_arm',
        'standing_pad_right_arm_unit_type',
        'standing_pas_left_arm',
        'standing_pas_left_arm_unit_type',
        'standing_pad_left_arm',
        'standing_pad_left_arm_unit_type',
        'avg_pad',
        'avg_pas',
    ];

    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    /**
     * Get temperature unit to attributes
     * @return BelongsTo
     */
    public function tempUnitType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'temp_unit_type');
    }

    /**
     * Get sitting breathing frequency unit type to attributes
     * @return BelongsTo
     */
    public function sitBreatheType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'sitting_breathing_frequency_unit_type');
    }

    /**
     * Get sitting heart rate unit type to attributes
     * @return BelongsTo
     */
    public function sitHeartRateType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'sitting_heart_rate_unit_type');
    }

    /**
     * Get sitting pas right arm type to attributes
     * @return BelongsTo
     */
    public function sitPasRightType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'sitting_pas_right_arm_unit_type');
    }

    /**
     * Get sitting pad right arm type to attributes
     * @return BelongsTo
     */
    public function sitPadRightType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'sitting_pad_right_arm_unit_type');
    }

    /**
     * Get sitting pas left arm type to attributes
     * @return BelongsTo
     */
    public function sitPasLeftType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'sitting_pas_left_arm_unit_type');
    }

    /**
     * Get sitting pad left arm type to attributes
     * @return BelongsTo
     */
    public function sitPadLeftType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'sitting_pad_left_arm_unit_type');
    }

    /**
     * Get lying down breathing frequency unit type to attributes
     * @return BelongsTo
     */
    public function lyingBreatheType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'lying_down_breathing_frequency_unit_type');
    }

    /**
     * Get lying down heart rate unit type to attributes
     * @return BelongsTo
     */
    public function lyingHeartRateType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'lying_down_heart_rate_unit_type');
    }

    /**
     * Get lying down pas right arm unit type to attributes
     * @return BelongsTo
     */
    public function lyingPasRightType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'lying_down_pas_right_arm_unit_type');
    }

    /**
     * Get lying down pad right arm unit type to attributes
     * @return BelongsTo
     */
    public function lyingPadRightType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'lying_down_pad_right_arm_unit_type');
    }

    /**
     * Get lying down pas left arm unit type to attributes
     * @return BelongsTo
     */
    public function lyingPasLeftType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'lying_down_pas_left_arm_unit_type');
    }

    /**
     * Get lying down pad left arm unit type to attributes
     * @return BelongsTo
     */
    public function lyingPadLeftType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'lying_down_pad_left_arm_unit_type');
    }

    /**
     * Get standing breathing frequency unit type to attributes
     * @return BelongsTo
     */
    public function standBreatheType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'standing_breathing_frequency_unit_type');
    }

    /**
     * Get standing heart rate unit type to attributes
     * @return BelongsTo
     */
    public function standHeartRateType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'standing_heart_rate_unit_type');
    }

    /**
     * Get standing pas right arm unit type to attributes
     * @return BelongsTo
     */
    public function standPasRightArmType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'standing_pas_right_arm_unit_type');
    }

    /**
     * Get standing pad right arm unit type to attributes
     * @return BelongsTo
     */
    public function standPadRightType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'standing_pad_right_arm_unit_type');
    }

    /**
     * Get standing pas left arm unit type to attributes
     * @return BelongsTo
     */
    public function standPasLeftType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'standing_pas_left_arm_unit_type');
    }

    /**
     * Get standing pad left arm unit type to attributes
     * @return BelongsTo
     */
    public function standPadLeftType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'standing_pad_left_arm_unit_type');
    }



}
