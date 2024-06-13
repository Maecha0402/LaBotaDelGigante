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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('num_guests');
            $table->date('arrival_date');
            $table->time('arrival_time');
            $table->date('departure_date');
            $table->text('special_request')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
