<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Echocardiogram
 *
 * @property int                             $id
 * @property string|null                     $description
 * @property string|null                     $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Echocardiogram newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Echocardiogram newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Echocardiogram query()
 * @method static \Illuminate\Database\Eloquent\Builder|Echocardiogram whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Echocardiogram whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Echocardiogram whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Echocardiogram whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Echocardiogram whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Echocardiogram whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Echocardiogram extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'description',
        'img',
    ];

    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }


}
