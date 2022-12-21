<?php

namespace App\Models\Restaurant;

use App\Models\Inventory\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPlate extends Model
{
    use HasFactory;

    /**
     * Get the products for the BillOrderPlate.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the plates for the BillOrderPlate.
     */
    public function plates()
    {
        return $this->hasMany(Plate::class);
    }
}
