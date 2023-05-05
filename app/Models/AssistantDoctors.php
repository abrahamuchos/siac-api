<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AssistantDoctors
 *
 * @property int $id
 * @property int $doctor_id
 * @property int $assistants_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctors newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctors newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctors query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctors whereAssistantsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctors whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctors whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctors whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctors whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AssistantDoctors extends Model
{
    use HasFactory;
}
