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

        return  view('pages.internet', compact('data'));
    }

    public function fiber()
    {
        return view('pages.fiber');
    }
}
