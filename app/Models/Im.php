<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Im
 *
 * @property int                             $id
 * @property int                             $background_id
 * @property bool                            $q
 * @property bool                            $no_q
 * @property int|null                        $year
 * @property string|null                     $location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Im newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Im newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Im query()
 * @method static \Illuminate\Database\Eloquent\Builder|Im whereBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Im whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Im whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Im whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Im whereNoQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Im whereQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Im whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Im whereYear($value)
 * @mixin \Eloquent
 */
class Im extends Model
{
    use HasFactory;

    protected $fillable = [
        'background_id',
        'q',
        'no_q',
        'year',
        'location',
    ];

    /**
     * @return BelongsTo
     */
    public function background(): BelongsTo
    {
        return $this->belongsTo(Background::class);
    }


}
