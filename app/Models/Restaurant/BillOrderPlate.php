<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillOrderPlate extends Model
{
    use HasFactory;

    /**
     * Get the bills for the BillOrderPlate.
     */
    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    /**
     * Get the orders for the BillOrderPlate.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Get the plates for the BillOrderPlate.
     */
    public function plates()
    {
        return $this->hasMany(Plate::class);
    }
}
