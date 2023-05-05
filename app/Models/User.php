<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $public_id
 * @property string $first_name
 * @property string|null $second_name
 * @property string $first_surname
 * @property string|null $second_surname
 * @property string $birthdate
 * @property string $email
 * @property string|null $public_email
 * @property string $id_document
 * @property int $id_document_type
 * @property string|null $medical_document
 * @property bool $gender
 * @property string $office_phone
 * @property string|null $office_phone2
 * @property string|null $cellphone
 * @property int $grade_type
 * @property string|null $username_instagram
 * @property string|null $username_twitter
 * @property string|null $username_facebook
 * @property string|null $website
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property string $address
 * @property string|null $postal_code
 * @property string|null $avatar
 * @property string|null $letterhead
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCellphone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGradeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIdDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIdDocumentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLetterhead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMedicalDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOfficePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOfficePhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePublicEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePublicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSecondName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSecondSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsernameFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsernameInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsernameTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWebsite($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
