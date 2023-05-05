<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ParaclinicalExamination
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination query()
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParaclinicalExamination whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ParaclinicalExamination extends Model
{
    use HasFactory;
}
