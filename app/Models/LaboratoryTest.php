<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\LaboratoryTest
 *
 * @property int                             $id
 * @property string                          $name
 * @property string|null                     $unit
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryTest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryTest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryTest query()
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryTest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryTest whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryTest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryTest whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryTest whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryTest whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LaboratoryTest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'unit',
    ];

    /**
     * @return BelongsToMany
     */
    public function medicalRecords(): BelongsToMany
    {
        return $this->belongsToMany(MedicalRecord::class, 'laboratory_test_medical_record');
    }



}
