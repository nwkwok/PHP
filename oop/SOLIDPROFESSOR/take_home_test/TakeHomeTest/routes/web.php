<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;
use App\Models\Vehicle;
use App\Models\Inventory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Return a list of all the distinct makes the dealership has.
Route::get('/vehicle/make', [VehicleController::class, 'showMake']);

// Return a list of all the distinct models the dealership has by vehicle type.  Allow filtering by a specific vehicle type.

# Used Route Model binding for filtering the specific type
Route::get('/vehicle/model/{type}', [VehicleController::class, 'showModelType']);

Route::get('/inventory', [InventoryController::class, 'inStock']);
