<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\AssistantDoctor
 *
 * @property int                             $id
 * @property int                             $doctor_id
 * @property int                             $assistant_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctor whereAssistantsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctor whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantDoctor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AssistantDoctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'assistant_id',
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
