<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquivalentUnit extends Model
{
    use HasFactory;

    /**
     * Get the measurement unit for the equivalent unit.
     */
    public function measuremenUnit()
    {
        return $this->hasMany(MeasurementUnit::class, 'measurement_unit');
    }


    /**
     * Get the equivalent measurement unit for the equivalent unit.
     */
    public function equivalentMeasurementUnit()
    {
        return $this->hasMany(MeasurementUnit::class, 'equivalent_measurement_unit');
    }
}
