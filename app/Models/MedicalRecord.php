<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\MedicalRecord
 *
 * @property int                             $id
 * @property int                             $appointment_id
 * @property int                             $background_id
 * @property int|null                        $anthropometry_id
 * @property int|null                        $physical_exam_id
 * @property int|null                        $electrocardiogram_id
 * @property int|null                        $echocardiogram_id
 * @property int|null                        $lifestyle_id
 * @property int|null                        $vital_sign_id
 * @property int|null                        $diagnostic_id
 * @property int|null                        $workplan_id
 * @property int                             $recipe_id
 * @property int|null                        $report_id
 * @property int|null                        $pending_id
 * @property int|null                        $pulse_mean_arterial_pressure_id
 * @property int|null                        $interheart_risk_id
 * @property int|null                        $find_risk_id
 * @property int|null                        $glomerular_filtration_id
 * @property int|null                        $hvi_id
 * @property int|null                        $atherogenic_dyslipidemia_id
 * @property int|null                        $dyslipidemia_reduce_residual_risk_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
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
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'appointment_id',
        'background_id',
        'anthropometry_id',
        'physical_exam_id',
        'electrocardiogram_id',
        'echocardiogram_id',
        'lifestyle_id',
        'vital_sign_id',
        'diagnostic_id',
        'workplan_id',
        'recipe_id',
        'report_id',
        'pending_id',
        'pulse_mean_arterial_pressure_id',
        'interheart_risk_id',
        'find_risk_id',
        'glomerular_filtration_id',
        'hvi_id',
        'atherogenic_dyslipidemia_id',
        'dyslipidemia_reduce_residual_risk_id',
    ];

    /**
     * Get all laboratory tests
     * @return BelongsToMany
     */
    public function labTests(): BelongsToMany
    {
        return $this->belongsToMany(LaboratoryTest::class, 'laboratory_test_medical_record');
    }

    /**
     * @return BelongsToMany
     */
    public function treatments(): BelongsToMany
    {
        return $this->belongsToMany(Treatment::class);
    }

    /**
     * @return HasMany
     */
    public function customTreatments(): HasMany
    {
        return $this->hasMany(CustomTreatment::class);
    }


    /**
     * @return BelongsTo
     */
    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }

    /**
     * @return BelongsTo
     */
    public function background(): BelongsTo
    {
        return $this->belongsTo(Background::class);
    }

    /**
     * @return BelongsTo
     */
    public function anthropometry(): BelongsTo
    {
        return $this->belongsTo(Anthropometry::class);
    }

    /**
     * @return BelongsTo
     */
    public function physicalExam(): BelongsTo
    {
        return $this->belongsTo(PhysicalExam::class);
    }

    /**
     * @return BelongsTo
     */
    public function electro(): BelongsTo
    {
        return $this->belongsTo(Electrocardiogram::class);
    }

    /**
     * @return BelongsTo
     */
    public function echo(): BelongsTo
    {
        return $this->belongsTo(Echocardiogram::class);
    }

    /**
     * @return BelongsTo
     */
    public function lifestyle(): BelongsTo
    {
        return $this->belongsTo(Lifestyle::class);
    }

    /**
     * @return BelongsTo
     */
    public function vitalSign(): BelongsTo
    {
        return $this->belongsTo(VitalSign::class);
    }

    /**
     * @return BelongsTo
     */
    public function diagnostic(): BelongsTo
    {
        return $this->belongsTo(Diagnostic::class);
    }

    /**
     * @return BelongsTo
     */
    public function workplan(): BelongsTo
    {
        return $this->belongsTo(Workplan::class);
    }

    /**
     * @return BelongsTo
     */
    public function recipe(): BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }

    /**
     * @return BelongsTo
     */
    public function report(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }

    /**
     * @return BelongsTo
     */
    public function pending(): BelongsTo
    {
        return $this->belongsTo(Pending::class);
    }

    /**
     * Get Pulse pressure and mean arterial pressure
     * @return BelongsTo
     */
    public function pulseArterial(): BelongsTo
    {
        return $this->belongsTo(PulseMeanArterialPressure::class);
    }

    /**
     * Get interheart risk
     * @return BelongsTo
     */
    public function interHeart(): BelongsTo
    {
        return $this->belongsTo(InterheartRisk::class);
    }

    /**
     * @return BelongsTo
     */
    public function findRisk(): BelongsTo
    {
        return $this->belongsTo(FindRisk::class);
    }

    /**
     * Get glomerular filtration
     * @return BelongsTo
     */
    public function glomerular(): BelongsTo
    {
        return $this->belongsTo(GlomerularFiltration::class);
    }

    /**
     * @return BelongsTo
     */
    public function hvi(): BelongsTo
    {
        return $this->belongsTo(Hvi::class);
    }

    /**
     * Get Atherogenic Dyslipidemia
     * @return BelongsTo
     */
    public function dyslipidemia(): BelongsTo
    {
        return $this->belongsTo(AtherogenicDyslipidemia::class);
    }

    /**
     * Get Dyslipidemia Reduce Residual Risk
     * @return BelongsTo
     */
    public function dyslipidemiaRisk(): BelongsTo
    {
        return $this->belongsTo(DyslipidemiaReduceResidualRisk::class);
    }

}
