<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class Inventory extends Model
{
    use HasFactory;

    // Vehicle will have a one to many relationship to inventory since there are 3 vehicles of a particular make & model in stock
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
