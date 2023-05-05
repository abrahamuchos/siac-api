<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Workplan
 *
 * @property int $id
 * @property string|null $nutrition
 * @property string|null $exercise
 * @property string|null $other_paraclinical_examination
 * @property string|null $other_consultation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereExercise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereNutrition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereOtherConsultation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereOtherParaclinicalExamination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workplan whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Workplan extends Model
{
    use HasFactory;
}
