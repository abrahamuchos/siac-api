<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\PhysicalActivity
 *
 * @property int                             $id
 * @property int                             $lifestyle_id
 * @property int                             $physical_activity_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity whereLifestyleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity wherePhysicalActivityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PhysicalActivity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'lifestyle_id',
        'physical_activity_type',
    ];

    /**
     * @return BelongsTo
     */
    public function lifestyle(): BelongsTo
    {
        return $this->belongsTo(Lifestyle::class);
    }

    /**
     * Get physical activity type to attributes
     * @return BelongsTo
     */
    public function activityType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'physical_activity_type');
    }






}
