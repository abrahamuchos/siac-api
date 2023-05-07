<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Disease
 *
 * @property int                             $id
 * @property int|null                        $disease_id
 * @property string                          $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Disease newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Disease newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Disease query()
 * @method static \Illuminate\Database\Eloquent\Builder|Disease whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disease whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disease whereDiseaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disease whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disease whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disease whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Disease extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'disease_id',
        'name',
    ];

    /**
     * Get all diseases' child (recursive)
     * @return HasMany
     */
    public function childDiseases(): HasMany
    {
        return $this->hasMany(Disease::class);
    }


    /**
     * @return BelongsToMany
     */
    public function familyBackgrounds(): BelongsToMany
    {
        return $this->belongsToMany(FamilyBackground::class, 'disease_family_background');
    }

    /**
     * Get disease's parent (recursive)
     * @return BelongsTo
     */
    public function parentDisease(): BelongsTo
    {
        return $this->belongsTo(Disease::class);
    }

    /**
     * @return HasMany
     */
    public function arrhythmiasFa(): HasMany
    {
        return $this->hasMany( Background::class,'arrhythmia_fa_disease_id');
    }

    /**
     * Get all ictus diseases backgrounds
     * @return HasMany
     */
    public function ictusDiseases(): HasMany
    {
        return $this->hasMany(Background::class,'ictus_disease_id');
    }



}
