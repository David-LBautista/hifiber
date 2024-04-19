<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function internet()
    {
        return  view('pages.internet');
    }

    public function fiber()
    {
        return view('pages.fiber');
    }
}
