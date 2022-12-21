<?php

namespace App\Models\Restaurant;

use App\Models\Inventory\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    use HasFactory;

    /**
     * Get all the bills for the plate.
     */
    public function bills()
    {
        return $this->hasManyThrough(Bill::class, BillOrderPlate::class);
    }

    /**
     * Get all the orders for the plate.
     */
    public function orders()
    {
        return $this->hasManyThrough(Order::class, BillOrderPlate::class);
    }

    /**
     * Get all the products for the plate.
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, ProductPlate::class);
    }
}
