<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\OtherFrequency
 *
 * @property int                             $id
 * @property int|null                        $treatment_id
 * @property string                          $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|OtherFrequency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherFrequency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherFrequency query()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherFrequency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherFrequency whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherFrequency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherFrequency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherFrequency whereTreatmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherFrequency whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OtherFrequency extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'treatment_id',
        'name',
    ];

    /**
     * @return BelongsTo
     */
    public function treatment(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'treatment_id');
    }
}
