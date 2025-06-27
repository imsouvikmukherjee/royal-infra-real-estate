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
        Schema::create('investment_benefits', function (Blueprint $table) {
            $table->id();
            $table->decimal('investors_percentage', 5, 2)->nullable();
            $table->decimal('channel_partner_percentage_spot', 5, 2)->nullable();
            $table->decimal('channel_partner_percentage_month', 5, 2)->nullable();
            $table->tinyInteger('number_of_months')->unsigned()->nullable();
            $table->decimal('master_channel_partner_percentage', 5, 2)->nullable();
            $table->decimal('franchise_partner_percentage', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investment_benefits');
    }
};
