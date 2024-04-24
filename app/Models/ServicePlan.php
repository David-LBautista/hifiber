<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ServicePlan extends Model
{
    use SoftDeletes;

    protected $table = 'service_plans';

    public function get_cat_type_equipment()
    {
        return $this->belongsTo(CatTypeEquipment::class, 'cat_type_equipment');
    }

    public function get_cat_type_service_plan()
    {
        return $this->belongsTo(CatTypeServicePlan::class, 'cat_type_service_plan');
    }

    public function get_cat_type_service()
    {
        return $this->belongsTo(CatTypeService::class, 'cat_type_service');
    }
}
