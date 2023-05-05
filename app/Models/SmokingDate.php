<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SmokingDate
 *
 * @property int $id
 * @property int $diagnostic_id
 * @property string $abandon_date
 * @property string $reset_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SmokingDate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmokingDate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmokingDate query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmokingDate whereAbandonDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmokingDate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmokingDate whereDiagnosticId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmokingDate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmokingDate whereResetDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmokingDate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SmokingDate extends Model
{
    use HasFactory;
}
