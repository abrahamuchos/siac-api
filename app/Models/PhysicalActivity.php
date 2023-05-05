<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PhysicalActivity
 *
 * @property int $id
 * @property int $lifestyle_id
 * @property int $physical_activity_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity whereLifestyleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity wherePhysicalActivityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhysicalActivity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PhysicalActivity extends Model
{
    use HasFactory;
}
