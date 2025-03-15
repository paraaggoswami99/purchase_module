<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('purchases', function (Blueprint $table) {
        $table->id();
        $table->string('vendor');
        $table->string('make');
        $table->string('model');
        $table->string('color');
        $table->string('mileage');
        $table->text('specification');
        $table->string('engine_size');
        $table->decimal('base_price', 10, 2);
        $table->string('status')->default('arriving');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
