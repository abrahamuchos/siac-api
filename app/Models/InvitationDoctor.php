<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\InvitationDoctor
 *
 * @property int                             $id
 * @property int                             $invitation_id
 * @property int                             $doctor_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\InvitationDoctorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|InvitationDoctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvitationDoctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvitationDoctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvitationDoctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvitationDoctor whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvitationDoctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvitationDoctor whereInvitationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvitationDoctor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class InvitationDoctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'invitation_id',
        'doctor_id',
    ];

    /**
     * @return BelongsTo
     */
    public function invitation(): BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }

}
