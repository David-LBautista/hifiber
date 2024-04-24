<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_plans', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 50)->nullable();
            $table->bigInteger('cat_type_service')->nullable();
            $table->bigInteger('cat_type_service_plan')->nullable();
            $table->bigInteger('cat_type_equipment')->nullable();
            $table->string('name', 150)->nullable();
            $table->double('price', 14, 4)->nullable();
            $table->string('color', 15)->nullable();
            $table->longText('description_short')->nullable();
            $table->text('description_long')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_plans');
    }
};
