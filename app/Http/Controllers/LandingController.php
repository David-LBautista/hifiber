<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServicePlan;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function internet()
    {
        $data = (object)[];

        $data->wireless_rent = ServicePlan::with([
            'get_cat_type_equipment',
            'get_cat_type_service_plan',
            'get_cat_type_service'
        ])->whereHas('get_cat_type_service', function ($query) {
            return $query->where('slug', 'wireless');
        })->whereHas('get_cat_type_equipment', function ($query) {
            return $query->where('slug', 'renta-de-equipo');
        })->get();

        $data->wireless_purchese = ServicePlan::with([
            'get_cat_type_equipment',
            'get_cat_type_service_plan',
            'get_cat_type_service'
        ])->whereHas('get_cat_type_service', function ($query) {
            return $query->where('slug', 'wireless');
        })->whereHas('get_cat_type_equipment', function ($query) {
            return $query->where('slug', 'compra-de-equipo');
        })->get();

        return  view('pages.internet', compact('data'));
    }

    public function fiber()
    {
        $data = (object)[];

        $data->fiber = ServicePlan::with([
            'get_cat_type_equipment',
            'get_cat_type_service_plan',
            'get_cat_type_service'
        ])->whereHas('get_cat_type_service', function ($query) {
            return $query->where('slug', 'fibra-optica');
        })->get();

        return view('pages.fiber', compact('data'));
    }
}
