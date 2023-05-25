<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Diagnostic
 *
 * @property int                             $id
 * @property bool                            $hta
 * @property int|null                        $hta_stage
 * @property int|null                        $hta_risk_type
 * @property string|null                     $hta_description
 * @property bool                            $dyslipidemia
 * @property int|null                        $dyslipidemia_type
 * @property string|null                     $dyslipidemia_description
 * @property bool                            $overweight
 * @property string|null                     $overweight_description
 * @property bool                            $obesity
 * @property string|null                     $obesity_description
 * @property bool                            $prediabetic
 * @property string|null                     $prediabetic_description
 * @property bool                            $diabetic
 * @property string|null                     $diabetic_description
 * @property bool                            $ischemic_heart_disease
 * @property string|null                     $ischemic_heart_disease_description
 * @property bool                            $arrhythmia
 * @property string|null                     $arrhythmia_description
 * @property bool                            $heart_failure
 * @property bool                            $heart_failure_resynchronize
 * @property string|null                     $heart_failure_description
 * @property bool                            $smoking
 * @property string|null                     $has_been_smoking
 * @property string|null                     $start_date_smoking
 * @property int|null                        $smoking_type
 * @property bool                            $ever_quit_smoking
 * @property bool                            $quit_smoking
 * @property bool                            $brief_counseling
 * @property int|null                        $time_first_cigar_type
 * @property int|null                        $cant_cigar_type
 * @property bool                            $first_hours_cigar
 * @property bool                            $smoking_sick
 * @property bool                            $smoking_prohibited_places
 * @property int|null                        $dislike_cigar_type
 * @property int|null                        $fagertom_score
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\DiagnosticFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereArrhythmia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereArrhythmiaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereBriefCounseling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereCantCigarType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereDiabetic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereDiabeticDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereDislikeCigarType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereDyslipidemia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereDyslipidemiaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereDyslipidemiaType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereEverQuitSmoking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereFagertomScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereFirstHoursCigar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereHasBeenSmoking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereHeartFailure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereHeartFailureDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereHta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereHtaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereHtaRiskType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereHtaStage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereIschemicHeartDisease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereIschemicHeartDiseaseDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereObesity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereObesityDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereOverweight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereOverweightDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic wherePrediabetic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic wherePrediabeticDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereQuitSmoking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereSmoking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereSmokingProhibitedPlaces($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereSmokingSick($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereSmokingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereStartDateSmoking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereTimeFirstCigarType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diagnostic whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Diagnostic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'hta',
        'hta_stage',
        'hta_risk_type',
        'hta_description',
        'dyslipidemia',
        'dyslipidemia_hf',
        'dyslipidemia_type',
        'dyslipidemia_description',
        'overweight',
        'overweight_description',
        'obesity',
        'obesity_description',
        'prediabetic',
        'prediabetic_description',
        'diabetic',
        'diabetic_description',
        'ischemic_heart_disease',
        'ischemic_heart_disease_description',
        'arrhythmia',
        'arrhythmia_description',
        'heart_failure',
        'heart_failure_resynchronize',
        'heart_failure_description',
        'smoking',
        'has_been_smoking',
        'start_date_smoking',
        'smoking_type',
        'ever_quit_smoking',
        'quit_smoking',
        'brief_counseling',
        'time_first_cigar_type',
        'cant_cigar_type',
        'first_hours_cigar',
        'smoking_sick',
        'smoking_prohibited_place',
        'dislike_cigar_type',
        'fagertom_score',
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
    public function smokingDates(): HasMany
    {
        return $this->hasMany(SmokingDate::class);
    }

    /**
     * Get unit to attributes
     * @return BelongsTo
     */
    public function htaRiskType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'hta_risk_type');
    }

    /**
     * @return BelongsTo
     */
    public function dyslipidemiaType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'dyslipidemia_type');
    }

    /**
     * Get unit to attributes
     * @return BelongsTo
     */
    public function smokingType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'smoking_type');
    }
    /**
     * Get time first cigar type
     * @return BelongsTo
     */
    public function firstCigarType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'time_first_cigar_type');
    }

    /**
     * Get dislike cigar type
     * @return BelongsTo
     */
    public function dislikeCigarType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'dislike_cigar_type');
    }










}
