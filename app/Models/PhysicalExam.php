<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PhysicalExam
 *
 * @property int $id
 * @property int|null $general_aspect_type
 * @property string|null $other_observation
 * @property bool $sinus_x
 * @property bool $cvy
 * @property int|null $oscillating_stop
 * @property int|null $oscillating_stop_unit_type
 * @property string|null $pvy_other
 * @property bool|null $carotid_beats_symmetrical
 * @property bool|null $carotid_beats_homocrote
 * @property bool|null $carotid_beats_normal_width
 * @property bool|null $apex_is_palpable
 * @property bool|null $apex_displaced
 * @property int|null $apex_characteristic_type
 * @property bool|null $auscultation_regular
 * @property int|null $auscultation_r1_type
 * @property int|null $auscultation_r2_type
 * @property bool|null $auscultation_r3
 * @property bool|null $auscultation_r4
 * @property bool|null $auscultation_gallop_pace
 * @property bool|null $peripheral_pulses_symmetrical
 * @property int|null $peripheral_pulses_mi
 * @property int|null $peripheral_pulses_mid
 * @property int|null $peripheral_pulses_mii
 * @property int|null $edema_lower_limbs
 * @property int|null $itb_right_ankle_pressure
 * @property int|null $itb_right__arm_pressure
 * @property int|null $itb_left_ankle_pressure
 * @property int|null $itb_left_arm_pressure
 * @property float|null $score_itb
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
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
    use HasFactory;
}
