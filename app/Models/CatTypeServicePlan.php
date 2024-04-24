<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CatTypeServicePlan extends Model
{
    use SoftDeletes;

    protected $table = 'cat_types_service_plans';
}
