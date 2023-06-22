<?php

namespace App\Http\Resources;

use App\Models\Role;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

/**
 *
 * @property int                             $id
 * @property string                          $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class RolesResource extends JsonResource
{
    public static $wrap = 'roles';
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array|\JsonSerializable|\Illuminate\Contracts\Support\Arrayable
    {
        $roleId = Auth::user()->roles()->first()->id;

        return [
            'id' => $this->id,
            'name' => $this->name,
            'createdAt' => $this->when($roleId === Role::ADMIN_ROLE, 'created_at'),
            'updatedAt' => $this->when($roleId === Role::ADMIN_ROLE, 'updated_at'),
            'deletedAt' => $this->when($roleId === Role::ADMIN_ROLE, 'deleted_at'),
        ];
    }
}
