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
        Schema::create('trains', function (Blueprint $table) {


            $table->id();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->string('departure_station');
            $table->timestamp('departure_time');
            $table->timestamp('arrival_time');
            $table->rand('train_id', 6);
            $table->rand('train_coach', 2);
            $table->boolean('is_timely');
            $table->boolean('is_deleted');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
