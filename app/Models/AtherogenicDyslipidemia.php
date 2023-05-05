<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AtherogenicDyslipidemia
 *
 * @property int $id
 * @property int $cvr_type
 * @property int|null $c_n_hdl
 * @property int|null $apo_b
 * @property int $result_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia query()
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia whereApoB($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia whereCNHdl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia whereCvrType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia whereResultType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtherogenicDyslipidemia whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AtherogenicDyslipidemia extends Model
{
    use HasFactory;
}
