<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

/**
 * App\Models\Invitation
 *
 * @property int                             $id
 * @property int|null                        $medical_id
 * @property string                          $email
 * @property string                          $first_name
 * @property string                          $last_name
 * @property bool                            $gender
 * @property string                          $token
 * @property string                          $accepted_at
 * @property string                          $expires_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\InvitationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereAcceptedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereMedicalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'medical_id',
        'email',
        'first_name',
        'last_name',
        'gender',
        'role',
        'token',
        'accepted_at',
        'expires_at',
    ];


    /**
     * Get users associated with working doctors
     * @return HasMany
     */
    public function associateDoctors(): HasMany
    {
        return $this->hasMany(InvitationDoctor::class);
    }

    /**
     * Make token to invitation
     * @return string
     */
    public static function createToken(): string
    {
        $randomString = \Str::random(40);
        $now = now()->format('Y-m-d H:i:s.u');

        return Hash::make($randomString.$now);
    }
}
