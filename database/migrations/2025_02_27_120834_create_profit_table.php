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
        Schema::create('profit', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->string('usertype');
            $table->string('property_name');
            $table->decimal('total_turnover', 15, 2)->default(0.00);
            $table->decimal('current_balance', 15, 2)->default(0.00);
            $table->decimal('profit_amount', 15, 2)->default(0.00);
            $table->decimal('monthly_amount', 15, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profit');
    }
};
