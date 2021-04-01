<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Vehicle;

class InventoryController extends Controller
{

    // Return a list of all individual physical vehicles that the dealership has in stock.
    public function inStock()
    {
        $inStock = Inventory::select('vehicle.make, vehicle.model, vehicle.type, vehicle.zero-sixty, vehicle.doors, vehicle.color, vehicle.head_light_quality, inventory.vin, inventory.in_stock, inventory.date_in_stock')
            ->join('vehicle', 'inventory.vehicle_id', '=', 'vehicle.id')
            ->where('in_stock', '=', 'true')
            ->orderBy('vehicle.id')
            ->get();

        return view('cars', [
            'inStock' => $inStock
        ]);
    }
}
