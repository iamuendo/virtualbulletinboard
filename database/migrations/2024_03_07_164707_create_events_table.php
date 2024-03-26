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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug')->unique();
            $table->string('poster');
            $table->longText('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location_details');
            $table->string('room_no', 50);
            $table->string('meeting_url');
            $table->string('available_slots');
            $table->boolean('isRegistrationOpen')->default(true);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('event_category_id')->constrained();
            $table->foreignId('event_mode_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
