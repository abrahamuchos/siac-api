<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pending
 *
 * @property int $id
 * @property int $paraclinical_examination_id
 * @property bool $is_completed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Pending newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pending newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pending query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pending whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pending whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pending whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pending whereIsCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pending whereParaclinicalExaminationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pending whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pending extends Model
{
    use HasFactory;
}
