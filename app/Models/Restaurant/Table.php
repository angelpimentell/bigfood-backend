<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    /**
     * Get the order that owns the table.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
