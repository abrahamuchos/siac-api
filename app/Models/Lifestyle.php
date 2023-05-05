<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Lifestyle
 *
 * @property int $id
 * @property bool $physical_exercise
 * @property string $start_physical_activity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Lifestyle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lifestyle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lifestyle query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lifestyle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lifestyle whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lifestyle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lifestyle wherePhysicalExercise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lifestyle whereStartPhysicalActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lifestyle whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Lifestyle extends Model
{
    use HasFactory;
}
