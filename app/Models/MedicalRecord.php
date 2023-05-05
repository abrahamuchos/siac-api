<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MedicalRecord
 *
 * @property int $id
 * @property int $appointment_id
 * @property int $background_id
 * @property int|null $anthropometry_id
 * @property int|null $physical_exam_id
 * @property int|null $electrocardiogram_id
 * @property int|null $echocardiogram_id
 * @property int|null $lifestyle_id
 * @property int|null $vital_sign_id
 * @property int|null $diagnostic_id
 * @property int|null $workplan_id
 * @property int $recipe_id
 * @property int|null $report_id
 * @property int|null $pending_id
 * @property int|null $pulse_mean_arterial_pressure_id
 * @property int|null $interheart_risk_id
 * @property int|null $find_risk_id
 * @property int|null $glomerular_filtration_id
 * @property int|null $hvi_id
 * @property int|null $atherogenic_dyslipidemia_id
 * @property int|null $dyslipidemia_reduce_residual_risk_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereAnthropometryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereAppointmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereAtherogenicDyslipidemiaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereDiagnosticId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereDyslipidemiaReduceResidualRiskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereEchocardiogramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereElectrocardiogramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereFindRiskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereGlomerularFiltrationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereHviId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereInterheartRiskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereLifestyleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord wherePendingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord wherePhysicalExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord wherePulseMeanArterialPressureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereRecipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereVitalSignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalRecord whereWorkplanId($value)
 * @mixin \Eloquent
 */
class MedicalRecord extends Model
{
    use HasFactory;
}
