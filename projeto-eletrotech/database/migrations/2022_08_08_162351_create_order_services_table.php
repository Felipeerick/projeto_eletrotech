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
        Schema::create('order_services', function (Blueprint $table) {
            $table->id();
            $table->string('dateOfEntry');
            $table->string('valueTotal');
            $table->string('discount')->nullable();
            $table->string('status');
            $table->string('equipment');
            $table->string('model');
            $table->string('brand');
            $table->string('serialNumber');
            $table->string('observation')->nullable();
            $table->string('defect')->nullable();
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
        Schema::dropIfExists('order_services');
    }
};
