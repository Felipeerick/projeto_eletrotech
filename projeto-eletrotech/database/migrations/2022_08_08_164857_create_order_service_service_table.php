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
        Schema::create('order_service_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_service_id')->constrained('order_services')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('serviceDescription')->nullable();
            $table->string('warranty')->nullable();
            $table->string('valueService')->nullable();
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
        Schema::dropIfExists('order_service_service');
    }
};
