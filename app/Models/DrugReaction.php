<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\DrugReaction
 *
 * @property int                             $id
 * @property string                          $name
 * @property bool                            $is_available
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|DrugReaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DrugReaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DrugReaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|DrugReaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugReaction whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugReaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugReaction whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugReaction whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DrugReaction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DrugReaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'is_available',
    ];

    /**
     * @return BelongsToMany
     */
    public function treatments(): BelongsToMany
    {
        return $this->belongsToMany(Treatment::class, 'drug_reaction_treatment');
    }
}
