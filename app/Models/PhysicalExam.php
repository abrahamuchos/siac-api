<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\PhysicalExam
 *
 * @property int                             $id
 * @property int|null                        $general_aspect_type
 * @property string|null                     $other_observation
 * @property bool                            $sinus_x
 * @property bool                            $cvy
 * @property int|null                        $oscillating_stop
 * @property int|null                        $oscillating_stop_unit_type
 * @property string|null                     $pvy_other
 * @property bool|null                       $carotid_beats_symmetrical
 * @property bool|null                       $carotid_beats_homocrote
 * @property bool|null                       $carotid_beats_normal_width
 * @property bool|null                       $apex_is_palpable
 * @property bool|null                       $apex_displaced
 * @property int|null                        $apex_characteristic_type
 * @property bool|null                       $auscultation_regular
 * @property int|null                        $auscultation_r1_type
 * @property int|null                        $auscultation_r2_type
 * @property bool|null                       $auscultation_r3
 * @property bool|null                       $auscultation_r4
 * @property bool|null                       $auscultation_gallop_pace
 * @property bool|null                       $peripheral_pulses_symmetrical
 * @property int|null                        $peripheral_pulses_mi
 * @property int|null                        $peripheral_pulses_mid
 * @property int|null                        $peripheral_pulses_mii
 * @property int|null                        $edema_lower_limbs
 * @property int|null                        $itb_right_ankle_pressure
 * @property int|null                        $itb_right__arm_pressure
 * @property int|null                        $itb_left_ankle_pressure
 * @property int|null                        $itb_left_arm_pressure
 * @property float|null                      $score_itb
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Database\Factories\PhysicalExamFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereApexCharacteristicType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereApexDisplaced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereApexIsPalpable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereAuscultationGallopPace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereAuscultationR1Type($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereAuscultationR2Type($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereAuscultationR3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereAuscultationR4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereAuscultationRegular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereCarotidBeatsHomocrote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereCarotidBeatsNormalWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereCarotidBeatsSymmetrical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereCvy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereEdemaLowerLimbs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereGeneralAspectType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereItbLeftAnklePressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereItbLeftArmPressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereItbRightAnklePressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereItbRightArmPressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereOscillatingStop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereOscillatingStopUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereOtherObservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam wherePeripheralPulsesMi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam wherePeripheralPulsesMid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam wherePeripheralPulsesMii($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam wherePeripheralPulsesSymmetrical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam wherePvyOther($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereScoreItb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereSinusX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalExam whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PhysicalExam extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'general_aspect_type',
        'other_observation',
        'sinus_x',
        'cvy',
        'oscillating_stop',
        'oscillating_stop_unit_type',
        'pvy_other',
        'carotid_beats_symmetrical',
        'carotid_beats_homocrote',
        'carotid_beats_normal_width',
        'apex_is_palpable',
        'apex_displaced',
        'apex_characteristic_type',
        'auscultation_regular',
        'auscultation_r1_type',
        'auscultation_r2_type',
        'auscultation_r3',
        'auscultation_r4',
        'auscultation_gallop_pace',
        'peripheral_pulses_symmetrical',
        'peripheral_pulses_mi',
        'peripheral_pulses_mid',
        'peripheral_pulses_mii',
        'edema_lower_limbs',
        'itb_right_ankle_pressure',
        'itb_right_arm_pressure',
        'itb_left_ankle_pressure',
        'itb_left_arm_pressure',
        'score_itb',
    ];

    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    /**
     * @return HasMany
     */
    public function breaths(): HasMany
    {
        return $this->hasMany(Breath::class);
    }

    /**
     * Get general aspect type to attributes
     * @return BelongsTo
     */
    public function aspectType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'general_aspect_type');
    }

    /**
     * Get oscillating stop unit type to attributes
     * @return BelongsTo
     */
    public function oscillatingUnitType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'oscillating_stop_unit_type');
    }

    /**
     * Get apex characteristic type to attributes
     * @return BelongsTo
     */
    public function apexType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'apex_characteristic_type');
    }

    /**
     * Get auscultation R1 type to attributes
     * @return BelongsTo
     */
    public function auscultationR1Type(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'auscultation_r1_type');
    }

    /**
     * Get auscultation R2 type to attributes
     * @return BelongsTo
     */
    public function auscultationR2Type(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'auscultation_r2_type');
    }
}
