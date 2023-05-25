<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Background
 *
 * @property int                             $id
 * @property bool                            $hta
 * @property bool                            $hta_controlled
 * @property int|null                        $hta_diagnostic_time_type
 * @property bool                            $prediabetic
 * @property bool                            $prediabetic_controlled
 * @property int|null                        $prediabetic_diagnostic_time_type
 * @property bool                            $diabetic
 * @property bool|null                       $diabetic_controlled
 * @property int|null                        $diabetic_diagnostic_time_type
 * @property bool                            $dyslipidemia
 * @property bool|null                       $dyslipidemia_controlled
 * @property int|null                        $dyslipidemia_diagnostic_time_type
 * @property bool                            $hypertensive_emergency
 * @property bool|null                       $diabetic_emergency
 * @property bool                            $acute_coronary_syndrome
 * @property bool                            $chronic_coronary_syndrome
 * @property int|null                        $chronic_coronary_syndrome_year
 * @property bool                            $revascularized
 * @property bool                            $surgical
 * @property int|null                        $surgical_year
 * @property int|null                        $surgical_number_bridges_type
 * @property bool                            $percutaneous
 * @property int|null                        $percutaneous_year
 * @property int|null                        $percutaneous_number_glass_type
 * @property int|null                        $percutaneous_number_stent_type
 * @property bool                            $percutaneous_medicated
 * @property int|null                        $canadian_functional_class
 * @property bool                            $arrhythmia_fa
 * @property int|null                        $arrhythmia_fa_year
 * @property int|null                        $arrhythmia_fa_type
 * @property string|null                     $arrhythmia_fa_pharmacotherapy
 * @property string|null                     $arrhythmia_fa_others_pharmacotherapy
 * @property bool|null                       $arrhythmia_fa_ablation
 * @property int|null                        $arrhythmia_fa_ablation_year
 * @property bool|null                       $arrhythmia_fa_anticoagulated
 * @property string|null                     $arrhythmia_fa_anticoagulated_pharmacotherapy
 * @property bool|null                       $arrhythmia_fa_cdi
 * @property int|null                        $arrhythmia_fa_cdi_year
 * @property bool|null                       $has_bled_hta
 * @property bool|null                       $has_bled_renal_disease
 * @property bool|null                       $has_bled_liver_disease
 * @property bool|null                       $has_bled_history_strokes
 * @property bool|null                       $has_bled_bleeding
 * @property bool|null                       $has_bled_inr
 * @property bool|null                       $has_bled_medications_blood
 * @property bool|null                       $has_bled_alcohol
 * @property int|null                        $has_bled_score
 * @property int|null                        $has_bled_risk_type
 * @property float|null                      $has_bled_bleeding_risk
 * @property float|null                      $has_bled_bleeding_patients
 * @property int|null                        $has_bled_recommendation_type
 * @property bool|null                       $chad_heart_failure
 * @property bool|null                       $chad_liver_disease
 * @property bool|null                       $chad_ictus
 * @property bool|null                       $chad_vascular_disease
 * @property int|null                        $chad_score
 * @property float|null                      $chad_risk_ischemic_stroke
 * @property float|null                      $chad_risk_ictus
 * @property bool                            $heart_failure
 * @property string|null                     $heart_failure_date
 * @property int|null                        $heart_failure_nyha_functional_class
 * @property bool                            $peripheral_arterial_disease
 * @property int|null                        $peripheral_arterial_disease_territory_id
 * @property bool                            $chronic_kidney_disease
 * @property int|null                        $chronic_kidney_disease_stage
 * @property bool|null                       $chronic_kidney_disease_dialysis
 * @property bool                            $ictus
 * @property int|null                        $ictus_year
 * @property int|null                        $ictus_disease_id
 * @property string|null                     $relevant_noncardiovascular
 * @property string|null                     $custom_treatment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Database\Factories\BackgroundFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Background newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Background newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Background query()
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereAcuteCoronarySyndrome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereArrhythmiaFa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereArrhythmiaFaAblation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereArrhythmiaFaAblationYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereArrhythmiaFaAnticoagulated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background
 *         whereArrhythmiaFaAnticoagulatedPharmacotherapy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereArrhythmiaFaCdi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereArrhythmiaFaCdiYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereArrhythmiaFaOthersPharmacotherapy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereArrhythmiaFaPharmacotherapy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereArrhythmiaFaType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereArrhythmiaFaYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereCanadianFunctionalClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChadHeartFailure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChadIctus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChadLiverDisease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChadRiskIctus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChadRiskIschemicStroke($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChadScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChadVascularDisease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChronicCoronarySyndrome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChronicCoronarySyndromeYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChronicKidneyDisease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChronicKidneyDiseaseDialysis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereChronicKidneyDiseaseStage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereCustomTreatment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereDiabetic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereDiabeticControlled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereDiabeticDiagnosticTimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereDiabeticEmergency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereDyslipidemia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereDyslipidemiaControlled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereDyslipidemiaDiagnosticTimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledAlcohol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledBleeding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledBleedingPatients($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledBleedingRisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledHistoryStrokes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledHta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledInr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledLiverDisease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledMedicationsBlood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledRecommendationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledRenalDisease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledRiskType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHasBledScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHeartFailure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHeartFailureDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHeartFailureNyhaFunctionalClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHtaDiagnosticTimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereHypertensiveEmergency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereIctus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereIctusDiseaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereIctusYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background wherePercutaneous($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background wherePercutaneousMedicated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background wherePercutaneousNumberGlassType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background wherePercutaneousNumberStentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background wherePercutaneousYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background wherePeripheralArterialDisease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background wherePeripheralArterialDiseaseTerritoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background wherePrediabetic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background wherePrediabeticDiagnosticTimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereRelevantNoncardiovascular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereRevascularized($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereSurgical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereSurgicalNumberBridgesType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereSurgicalYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Background whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Background extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'hta',
        'hta_controlled',
        'hta_diagnostic_time_type',
        'prediabetic',
        'prediabetic_controlled',
        'prediabetic_diagnostic_time_type',
        'diabetic',
        'diabetic_controlled',
        'diabetic_diagnostic_time_type',
        'dyslipidemia',
        'dyslipidemia_controlled',
        'dyslipidemia_diagnostic_time_type',
        'hypertensive_emergency',
        'diabetic_emergency',
        'acute_coronary_syndrome',
        'chronic_coronary_syndrome',
        'chronic_coronary_syndrome_year',
        'revascularized',
        'surgical',
        'surgical_year',
        'surgical_number_bridges_type',
        'percutaneous',
        'percutaneous_year',
        'percutaneous_number_glass_type',
        'percutaneous_number_stent_type',
        'percutaneous_medicated',
        'canadian_functional_class',
        'arrhythmia_fa',
        'arrhythmia_fa_year',
        'arrhythmia_fa_type',
        'arrhythmia_fa_pharmacotherapy',
        'arrhythmia_fa_others_pharmacotherapy',
        'arrhythmia_fa_ablation',
        'arrhythmia_fa_ablation_year',
        'arrhythmia_fa_anticoagulated',
        'arrhythmia_fa_anticoagulated_pharmacotherapy',
        'arrhythmia_fa_cdi',
        'arrhythmia_fa_cdi_year',
        'has_bled_hta',
        'has_bled_renal_disease',
        'has_bled_liver_disease',
        'has_bled_history_strokes',
        'has_bled_bleeding',
        'has_bled_inr',
        'has_bled_medications_blood',
        'has_bled_alcohol',
        'has_bled_score',
        'has_bled_risk_type',
        'has_bled_bleeding_risk',
        'has_bled_bleeding_patients',
        'has_bled_recommendation_type',
        'chad_heart_failure',
        'chad_liver_disease',
        'chad_ictus',
        'chad_vascular_disease',
        'chad_score',
        'chad_risk_ischemic_stroke',
        'chad_risk_ictus',
        'heart_failure',
        'heart_failure_date',
        'heart_failure_nyha_functional_class',
        'peripheral_arterial_disease',
        'peripheral_arterial_disease_territory_id',
        'chronic_kidney_disease',
        'chronic_kidney_disease_stage',
        'chronic_kidney_disease_dialysis',
        'ictus',
        'ictus_year',
        'ictus_disease_id',
        'relevant_noncardiovascular',
        'custom_treatment',
    ];

    /**
     * Get all medical records
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    /**
     * Get all IM
     * @return HasMany
     */
    public function ims(): HasMany
    {
        return $this->hasMany(Im::class);
    }

    /**
     * Get all arrhythmia Esv
     * @return HasMany
     */
    public function arrhythmiaEsvs(): HasMany
    {
        return $this->hasMany(ArrhythmiaEsv::class);
    }

    /**
     * @return HasMany
     */
    public function arrhythmiaOthers(): HasMany
    {
        return $this->hasMany(ArrhythmiaOther::class);
    }

    /**
     * @return HasMany
     */
    public function familyBackgrounds(): HasMany
    {
        return $this->hasMany(FamilyBackground::class);
    }

    /**
     * @return BelongsToMany
     */
    public function treatments(): BelongsToMany
    {
        return $this->belongsToMany(Treatment::class);
    }

    /**
     * Reactions to treatments and backgrounds
     * @return BelongsToMany
     */
    public function drugReactions(): BelongsToMany
    {
        return $this->belongsToMany(DrugReaction::class, 'background_treatment', 'drug_reaction_id');
    }

    /**
     * Get hta diagnostic time type
     * @return BelongsTo
     */
    public function htaDxType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'hta_diagnostic_time_type');
    }

    /**
     * Get prediabetic diagnostic time type
     * @return BelongsTo
     */
    public function prediabeticDxType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'prediabetic_diagnostic_time_type');
    }

    /**
     * Get diabetic diagnostic time type
     * @return BelongsTo
     */
    public function diabeticDxType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'diabetic_diagnostic_time_type');
    }
    /**
     * Get dyslipidemia diagnostic time type
     * @return BelongsTo
     */
    public function dyslipidemiaDxType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'dyslipidemia_diagnostic_time_type');
    }
    /**
     * Get surgical number bridge type
     * @return BelongsTo
     */
    public function bridgeNumberType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'surgical_number_bridge_type');
    }
    /**
     * Get percutaneous number glass type
     * @return BelongsTo
     */
    public function glassNumberType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'percutaneous_number_glass_type');
    }
    /**
     * Get percutaneous number stent type
     * @return BelongsTo
     */
    public function stentNumberType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'percutaneous_number_stent_type');
    }

    /**
     * Get arrhythmia Fa Disease
     * @return BelongsTo
     */
    public function arrhythmiaFa(): BelongsTo
    {
        return $this->belongsTo(Disease::class, 'arrhythmia_fa_disease_id');
    }

    /**
     * Get has bled risk type
     * @return BelongsTo
     */
    public function hasBledRiskType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'has_bled_risk_type');
    }

    /**
     * Get has bled recommendation type
     * @return BelongsTo
     */
    public function hasBledRecoType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'has_bled_recommendation_type');
    }

    /**
     * Get peripheral arterial disease territory type
     * @return BelongsTo
     */
    public function padTerritoryType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'peripheral_arterial_disease_territory_id');
    }

    /**
     * Get ictus disease
     * @return BelongsTo
     */
    public function ictusDisease(): BelongsTo
    {
        return $this->belongsTo(Disease::class, 'ictus_disease_id');
    }
















}
