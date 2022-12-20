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
        Schema::create('equivalent_units', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Inventory\MeasurementUnit::class);
            $table->foreignIdFor(\App\Models\Inventory\MeasurementUnit::class, 'equivalent_measurement_unit');
            $table->float('equivalence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equivalent_units');
    }
};
