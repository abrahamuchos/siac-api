<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Treatment
 *
 * @property int                             $id
 * @property int|null                        $treatment_id
 * @property string                          $name
 * @property int|null                        $unit_type
 * @property string|null                     $warning
 * @property bool                            $frequency_qd
 * @property bool                            $frequency_bid
 * @property bool                            $frequency_tid
 * @property bool                            $frequency_qid
 * @property float|null                      $dose_min
 * @property float|null                      $dose_max
 * @property bool                            $is_available
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDoseMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDoseMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereFrequencyBid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereFrequencyQd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereFrequencyQid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereFrequencyTid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereTreatmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereWarning($value)
 * @mixin \Eloquent
 */
class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'treatment_id',
        'name',
        'unit_type',
        'warning',
        'frequency_qd',
        'frequency_bid',
        'frequency_tid',
        'frequency_qid',
        'dose_min',
        'dose_max',
        'is_available',
    ];

    /**
     * @return HasMany
     */
    public function childTreatments(): HasMany
    {
        return $this->hasMany(Treatment::class, 'treatment_id', 'id');
    }

    /**
     * @return BelongsToMany
     */
    public function backgrounds(): BelongsToMany
    {
        return $this->belongsToMany(Background::class);
    }

    /**
     * @return BelongsToMany
     */
    public function drugReactions(): BelongsToMany
    {
        return $this->belongsToMany(DrugReaction::class, 'drug_reaction_treatment');
    }

    /**
     * @return BelongsToMany
     */
    public function medicalRecords(): BelongsToMany
    {
        return $this->belongsToMany(MedicalRecord::class);
    }

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function parentTreatment(): BelongsTo
    {
        return $this->belongsTo(Treatment::class, 'treatment_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function otherFrequencies(): HasMany
    {
        return $this->hasMany(OtherFrequency::class);
    }

    /**
     * @return BelongsTo
     */
    public function unitType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'unit_type');
    }


}
