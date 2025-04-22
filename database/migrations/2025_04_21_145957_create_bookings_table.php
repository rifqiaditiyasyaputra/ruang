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
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('room_id')->constrained()->onDelete('cascade');
        $table->dateTime('start_time');
        $table->dateTime('end_time');
        $table->text('purpose');
        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
        $table->text('admin_notes')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
