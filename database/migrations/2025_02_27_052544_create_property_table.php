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
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->string('property_category');
            $table->string('property_name');
            $table->string('property_address')->nullable();
            $table->string('property_contact')->nullable();
            $table->text('property_map')->nullable();
            $table->string('property_image');
            $table->decimal('price',10,2)->nullable();
            $table->text('property_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property');
    }
};
