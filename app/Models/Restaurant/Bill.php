<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    /**
     * Get the user creator associated with the bill.
     */
    public function userCreator()
    {
        return $this->hasOne(Bill::class);
    }

    /**
     * Get all the orders for the bill.
     */
    public function orders()
    {
        return $this->hasManyThrough(Order::class, BillOrderPlate::class);
    }

    /**
     * Get all the plates for the bill.
     */
    public function plates()
    {
        return $this->hasManyThrough(Plate::class, BillOrderPlate::class);
    }
}
