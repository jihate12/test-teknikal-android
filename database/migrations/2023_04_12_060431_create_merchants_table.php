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
        Schema::create('merchants', function (Blueprint $table) {
            $table->id('merchant_id');
            // $table->foreignId('city_id')->constrained('city')->onUpdate('cascade')->onDelete('cascade');
            $table->string('merchant_name', 100);
            $table->text('address');
            $table->string('phone', 16);
            $table->date('expire_date');
            $table->timestamps();
        });

        Schema::table('merchants', function (Blueprint $table) {
            $table->foreignId('city_id')->references('city_id')->on('city')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchants');
    }
};
