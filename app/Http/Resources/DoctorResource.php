<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

/**
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
 * @property string                                                        $timezone
 * @property string|null                                                   $postal_code
 * @property string|null                                                   $avatar
 * @property string|null                                                   $letterhead
 * @property string                                                        $password
 * @property \Carbon\Carbon|null                                                   $email_verified_at
 * @property string|null                                                   $remember_token
 * @property \Carbon\Carbon|null                                                   $created_at
 * @property \Carbon\Carbon|null                                                   $updated_at
 * @property \Carbon\Carbon|null                                                   $deleted_at
 */
class DoctorResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array|\JsonSerializable|\Illuminate\Contracts\Support\Arrayable
    {
        return [
            'id' => $this->id,
            'publicId' => $this->public_id,
            'firstName' => $this->first_name,
            'secondName' => $this->second_name,
            'firstSurname' => $this->first_surname,
            'secondSurname' => $this->second_surname,
            'birthdate' => $this->birthdate,
            'email' => $this->email,
            'publicEmail' => $this->public_email,
            'idDocument' => $this->id_document,
            'idDocumentType' => $this->id_document_type,
            'medicalDocument' => $this->medical_document,
            'gender' => $this->gender,
            'officePhone' => $this->office_phone,
            'officePhone2' => $this->office_phone2,
            'cellphone' => $this->cellphone,
            'gradeType' => $this->grade_type,
            'usernameInstagram' => $this->username_instagram,
            'usernameTwitter' => $this->username_twitter,
            'usernameFacebook' => $this->username_facebook,
            'website' => $this->website,
            'timezone' => $this->timezone,
            'countryId' => $this->country_id,
            'stateId' => $this->state_id,
            'cityId' => $this->city_id,
            'address' => $this->address,
            'postalCode' => $this->postal_code,
            'avatar' => $this->avatar,
            'letterhead' => $this->letterhead,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'deletedAt' => $this->deleted_at,
            'roles' => RolesResource::collection($this->whenLoaded('roles'))
        ];
    }
}
