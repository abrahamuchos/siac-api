<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Workplan
 *
 * @property int                             $id
 * @property string|null                     $nutrition
 * @property string|null                     $exercise
 * @property string|null                     $other_paraclinical_examination
 * @property string|null                     $other_consultation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereExercise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereNutrition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereOtherConsultation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereOtherParaclinicalExamination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Workplan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nutrition',
        'exercise',
        'other_paraclinical_examination',
        'other_consultation',
    ];


    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    /**
     * Get all paraclinical examination
     * @return BelongsToMany
     */
    public function paraclinicalExam(): BelongsToMany
    {
        return $this->belongsToMany(ParaclinicalExamination::class, 'paraclinical_examination_workplan');
    }

    /**
     * @return BelongsToMany
     */
    public function consultations(): BelongsToMany
    {
        return $this->belongsToMany(Consultation::class);
    }

    /**
     * @return BelongsToMany
     */
    public function materials(): BelongsToMany
    {
        return $this->belongsToMany(Material::class);
    }





}
