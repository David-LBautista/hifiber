<?php

namespace App\Http\Controllers;

use App\Models\CatTypeEquipment;
use App\Models\CatTypeService;
use App\Models\CatTypeServicePlan;
use Illuminate\Http\Request;

use App\Models\ServicePlan;

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

        return view('system.service-plans', compact('data'));
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
            'description' => 'required|string|max:255',
        ]);
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
