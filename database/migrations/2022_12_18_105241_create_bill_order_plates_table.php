<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_order_plates', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Restaurant\Bill::class);
            $table->foreignIdFor(\App\Models\Restaurant\Order::class);
            $table->foreignIdFor(\App\Models\Restaurant\Plate::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_order_plates');
    }
};
