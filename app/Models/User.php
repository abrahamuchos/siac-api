<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;


/**
 * App\Models\User
 *
 * @property int                                                           $id
 * @property string                                                        $public_id
 * @property string                                                        $first_name
 * @property string|null                                                   $second_name
 * @property string                                                        $first_surname
 * @property string|null                                                   $second_surname
 * @property string                                                        $birthdate
 * @property string                                                        $email
 * @property string|null                                                   $public_email
 * @property string                                                        $id_document
 * @property int                                                           $id_document_type
 * @property string|null                                                   $medical_document
 * @property bool                                                          $gender
 * @property string                                                        $office_phone
 * @property string|null                                                   $office_phone2
 * @property string|null                                                   $cellphone
 * @property int                                                           $grade_type
 * @property string|null                                                   $username_instagram
 * @property string|null                                                   $username_twitter
 * @property string|null                                                   $username_facebook
 * @property string|null                                                   $website
 * @property int                                                           $country_id
 * @property int                                                           $state_id
 * @property int                                                           $city_id
 * @property string                                                        $address
 * @property string|null                                                   $postal_code
 * @property string|null                                                   $avatar
 * @property string|null                                                   $letterhead
 * @property string                                                        $password
 * @property Carbon|null                                                   $email_verified_at
 * @property string|null                                                   $remember_token
 * @property Carbon|null                                                   $created_at
 * @property Carbon|null                                                   $updated_at
 * @property-read DatabaseNotificationCollection<int,DatabaseNotification> $notifications
 * @property-read int|null                                                 $notifications_count
 * @property-read Collection<int, PersonalAccessToken>                     $tokens
 * @property-read int|null                                                 $tokens_count
 * @property mixed                                                         $gradeType
 * @property mixed                                                         $doctors
 * @property mixed                                                         $roles
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
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'public_id',
        'first_name',
        'second_name',
        'first_surname',
        'second_surname',
        'birthdate',
        'email',
        'public_email',
        'id_document',
        'id_document_type',
        'medical_document',
        'gender',
        'office_phone',
        'office_phone2',
        'cellphone',
        'grade_type',
        'username_instagram',
        'username_twitter',
        'username_facebook',
        'website',
        'timezone',
        'country_id',
        'state_id',
        'city_id',
        'address',
        'postal_code',
        'avatar',
        'letterhead',
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

    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Get all doctors and relation with medical units
     * @return HasMany
     */
    public function doctors(): HasMany
    {
        return $this->hasMany(MedicalUnitDoctor::class, 'doctor_id');
    }

    /**
     * Get all medical units and relation with doctors
     * @return HasMany
     */
    public function medicalUnits(): HasMany
    {
        return $this->hasMany(MedicalUnitDoctor::class, 'medical_id');
    }

    /**
     * Get all assistants and relation with doctors
     * @return HasMany
     */
    public function assistants(): HasMany
    {
        return $this->hasMany(AssistantDoctor::class, 'assistant_id');
    }

    /**
     * Get all doctors and relation with assistants
     * @return HasMany
     */
    public function doctorWithAssistants(): HasMany
    {
        return $this->hasMany(AssistantDoctor::class, 'doctor_id');
    }

    /**
     * @return HasMany
     */
    public function consultationHours(): HasMany
    {
        return $this->hasMany(ConsultationHour::class, 'doctor_id');
    }

    /**
     * @return HasMany
     */
    public function materials(): HasMany
    {
        return $this->hasMany(Material::class, 'medical_id');
    }

    /**
     * Get document type to attributes (CC, PAS, DNI, CI)
     * @return BelongsTo
     */
    public function documentType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'id_document_type');
    }

    /**
     * Get grade type to attributes (Dr., Dra., Lic.)
     * @return BelongsTo
     */
    public function gradeType(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'grade_type');
    }

    /**
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    /**
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $url = env('APP_FRONTEND_URL').'/reset-password?token='.$token;

        $this->notify(new ResetPasswordNotification($url));
    }
}
