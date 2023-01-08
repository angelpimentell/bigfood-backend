<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Get the equivalent unit associated with the product,
     * a measurement unit used with this product.
     */
    public function equivalentUnit()
    {
        return $this->hasOne(EquivalentUnit::class);
    }
}
