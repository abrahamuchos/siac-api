<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\ParaclinicalExamination
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination query()
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ParaclinicalExamination extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(Pending::class);
    }

    /**
     * @return BelongsToMany
     */
    public function pendings(): BelongsToMany
    {
        return $this->belongsToMany(Pending::class);
    }


}
