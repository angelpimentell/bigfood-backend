<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeasurementUnit extends Model
{
    use HasFactory;

    /**
     * Get the equivalent unit that owns the table.
     */
    public function equivalentUnit()
    {
        return $this->belongsTo(EquivalentUnit::class);
    }
}
