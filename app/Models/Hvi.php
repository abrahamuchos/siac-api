<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Hvi
 *
 * @property int                             $id
 * @property int                             $age
 * @property int|null                        $wave_r_cornell
 * @property int|null                        $wave_s_cornell
 * @property int|null                        $score_cornell
 * @property int|null                        $wave_s_vi_sokolow
 * @property int|null                        $wave_r_sokolow
 * @property int|null                        $score_sokolow
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @method static \Database\Factories\HviFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereScoreCornell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereScoreSokolow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereWaveRCornell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereWaveRSokolow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereWaveSCornell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hvi whereWaveSViSokolow($value)
 * @mixin \Eloquent
 */
class Hvi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'age',
        'wave_r_cornell',
        'wave_s_cornell',
        'score_cornell',
        'wave_s_vi_sokolow',
        'wave_r_sokolow',
        'score_sokolow',
    ];

    /**
     * @return HasMany
     */
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }
}
