<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FamilyBackground
 *
 * @property int $id
 * @property int $background_id
 * @property int|null $kinship_type
 * @property int $age
 * @property string|null $other_disease
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground query()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereKinshipType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereOtherDisease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyBackground whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FamilyBackground extends Model
{
    use HasFactory;
}
