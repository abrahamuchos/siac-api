<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Breath
 *
 * @property int $id
 * @property int $physical_exam_id
 * @property int $breath_type
 * @property int $focus_type
 * @property int|null $intensity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Breath newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Breath newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Breath query()
 * @method static \Illuminate\Database\Eloquent\Builder|Breath whereBreathType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Breath whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Breath whereFocusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Breath whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Breath whereIntensity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Breath wherePhysicalExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Breath whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Breath extends Model
{
    use HasFactory;
}
