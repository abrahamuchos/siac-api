<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GlomerularFiltration
 *
 * @property int $id
 * @property int $age
 * @property bool $afro_american
 * @property bool $serum_creatinine
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|GlomerularFiltration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GlomerularFiltration newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GlomerularFiltration query()
 * @method static \Illuminate\Database\Eloquent\Builder|GlomerularFiltration whereAfroAmerican($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlomerularFiltration whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlomerularFiltration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlomerularFiltration whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlomerularFiltration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlomerularFiltration whereSerumCreatinine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlomerularFiltration whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GlomerularFiltration extends Model
{
    use HasFactory;
}
