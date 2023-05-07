<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Consultation
 *
 * @property int                             $id
 * @property int|null                        $consultation_id
 * @property string                          $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereConsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Consultation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'consultation_id',
        'name',
    ];

    /**
     * @return HasMany
     */
    public function consultationChild(): HasMany
    {
        return $this->hasMany(Consultation::class);
    }

    /**
     * @return BelongsToMany
     */
    public function workplans(): BelongsToMany
    {
        return $this->belongsToMany(Workplan::class);
    }

    /**
     * @return BelongsTo
     */
    public function consultationParent(): BelongsTo
    {
        return $this->belongsTo(Consultation::class);
    }


}
