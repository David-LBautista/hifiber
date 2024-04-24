<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CatTypeEquipment extends Model
{
    use SoftDeletes;

    protected $table = 'cat_types_equipments';
}
