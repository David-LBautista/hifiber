<?php

namespace App\Http\Controllers;

use App\Models\CatTypeEquipment;
use App\Models\CatTypeService;
use App\Models\CatTypeServicePlan;
use Illuminate\Http\Request;

use App\Models\ServicePlan;
use Exception;

class ServicesPlansController extends Controller
{
    public function index()
    {
        $data = (object)[];
        $data->plans = ServicePlan::with([
            'get_cat_type_equipment',
            'get_cat_type_service_plan',
            'get_cat_type_service'
        ])->get();
        $title = 'Listado de planes';

        $data->cat_type_services_plan = CatTypeServicePlan::all();
        $data->cat_type_services = CatTypeService::all();
        $data->cat_type_equipment = CatTypeEquipment::all();

        return view('system.service-plans', compact('data', 'title'));
    }

    public function show()
    {
        $data = (object)[];
        $data->get_cat_type_equipment = CatTypeEquipment::all();
        $data->get_cat_type_service_plan = CatTypeServicePlan::all();
        $data->get_cat_type_service = CatTypeService::all();

        return view('system.service-plans-show', compact('data'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required',
            'color' => 'required',
            'cat_type_service' => 'required',
            'cat_type_service_plan' => 'required',
            'cat_type_equipment' => 'required',
            'description_short' => 'required|string',
            'description_long' => 'required|string',
            'ordering' => 'required'
        ]);

        try {
            $service_plan = new ServicePlan();
            $service_plan->cat_type_service = $request->cat_type_service;
            $service_plan->cat_type_service_plan = $request->cat_type_service_plan;
            $service_plan->cat_type_equipment = $request->cat_type_equipment;
            $service_plan->ordering = $request->ordering;
            $service_plan->slug = str_replace(" ", "-", strtolower($request->name));
            $service_plan->name = $request->name;
            $service_plan->price = $request->price;
            $service_plan->color = $request->color;
            $service_plan->description_short = $request->description_short;
            $service_plan->description_long = $request->description_long;
            $service_plan->save();

            return redirect()->back()->with('success', 'El registro ha sido creado correctamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Request $request, $id)
    {
        $registro = ServicePlan::find($id);

        if (!$registro) {
            return redirect()->back()->with('error', 'El registro que intentas eliminar no existe.');
        }

        try {
            $registro->delete();
            return redirect()->back()->with('success', 'El registro ha sido eliminado correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ha ocurrido un error al eliminar el registro: ' . $e->getMessage());
        }
    }
}
