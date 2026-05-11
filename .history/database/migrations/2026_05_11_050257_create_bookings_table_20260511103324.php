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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
             $table->foreignId('room_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('guest_name');

            $table->string('guest_email')->nullable();

            $table->string('guest_phone');

            $table->date('check_in');

            $table->date('check_out');

            $table->integer('guests_count')->default(1);

            $table->decimal('total_price', 10, 2)->nullable();

            $table->enum('status', [
                'confirmed',
                'cancelled',
                'completed'
            ])->default('confirmed');

            $table->text('notes')->nullable();
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
