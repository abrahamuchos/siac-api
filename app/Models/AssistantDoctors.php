<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\AssistantDoctors
 *
 * @property int                             $id
 * @property int                             $doctor_id
 * @property int                             $assistants_id
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

    protected $fillable = [
        'doctor_id',
        'assistants_id',
    ];

    /**
     * @return BelongsTo
     */
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    /**
     * @return BelongsTo
     */
    public function assistant(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assistant_id');
    }



}
