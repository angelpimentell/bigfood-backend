<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Get the products for the BillOrderPlate.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
