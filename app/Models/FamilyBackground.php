<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\FamilyBackground
 *
 * @property int                             $id
 * @property int                             $background_id
 * @property int|null                        $kinship_type
 * @property int                             $age
 * @property string|null                     $other_disease
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground query()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereKinshipType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereOtherDisease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FamilyBackground extends Model
{
    use HasFactory;

    protected $fillable = [
        'background_id',
        'kinship_type',
        'age',
        'other_disease',
    ];

    /**
     * @return BelongsToMany
     */
    public function diseases(): BelongsToMany
    {
        return $this->belongsToMany(Disease::class, 'disease_family_background');
    }

    /**
     * @return BelongsTo
     */
    public function background(): BelongsTo
    {
        return $this->belongsTo(Background::class);
    }

    /**
     * Get kinship to attributes
     * @return BelongsTo
     */
    public function kinshipType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'kinship_type');
    }

    /**
     * @return BelongsToMany
     */
    public function treatments(): BelongsToMany
    {
        return $this->belongsToMany(Treatment::class, 'drug_reaction_treatment');
    }

}
