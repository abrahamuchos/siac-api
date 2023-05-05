<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Patient
 *
 * @property int $id
 * @property int $history_number
 * @property string $first_name
 * @property string|null $second_name
 * @property string $first_surname
 * @property string|null $second_surname
 * @property string $birthdate
 * @property string $email
 * @property string|null $email2
 * @property bool $gender
 * @property int|null $blood_type
 * @property string $id_document
 * @property int $id_document_type
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property string $address
 * @property string|null $username_instagram
 * @property string|null $username_twitter
 * @property string|null $username_facebook
 * @property string $phone_number
 * @property string|null $family_phone_number
 * @property string $admission
 * @property bool $first_consultation
 * @property int|null $race_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereAdmission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereBloodType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEmail2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereFamilyPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereFirstConsultation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereFirstSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereHistoryNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereIdDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereIdDocumentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereRaceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereSecondName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereSecondSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUsernameFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUsernameInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUsernameTwitter($value)
 * @mixin \Eloquent
 */
class Patient extends Model
{
    use HasFactory;
}
