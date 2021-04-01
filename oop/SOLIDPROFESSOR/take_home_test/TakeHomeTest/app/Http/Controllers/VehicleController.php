<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        return 'Vehicle Test';
    }

    // Return all distinct makes the dealership has.
    public function showMake()
    {
        $make = Vehicle::select('make')->distinct()->get();
        return view('cars', [
            'make' => $make
        ]);
    }

    // Return all distcint models that have a particular type
    public function showModelType($type)
    {
        $modelType = Vehicle::select('models')
            ->distinct()
            ->where('type', '=', $type)
            ->orderBy('make')
            ->get();

        return view('cars', [
            'modelType' => $modelType
        ]);
    }
}
