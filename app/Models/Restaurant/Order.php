<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Get the tables for the order.
     */
    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    /**
     * Get all the bills for the order.
     */
    public function bills()
    {
        return $this->hasManyThrough(Bill::class, BillOrderPlate::class);
    }

    /**
     * Get all the plates for the order.
     */
    public function plates()
    {
        return $this->hasManyThrough(Plate::class, BillOrderPlate::class);
    }
}
