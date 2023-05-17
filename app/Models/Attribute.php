<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property int|null $attribute_id
 * @property string $name
 * @property string $value
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereValue($value)
 * @mixin \Eloquent
 */
class Attribute extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'attribute_id',
        'name',
        'value',
    ];

    /**
     * Get all attributes' child (recursive)
     * @return HasMany
     */
    public function childAttributes(): HasMany
    {
        return $this->hasMany(Attribute::class);
    }

    /**
     * Get attributes' parent (recursive)
     * @return BelongsTo
     */
    public function parentAttributes(): BelongsTo
    {
        return $this->belongsTo(Attribute::class);
    }

}
