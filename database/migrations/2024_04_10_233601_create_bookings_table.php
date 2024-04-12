<?php

use App\Models\Participant;
use App\Models\Room;
use App\Models\Training;
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
            $table->string('kode_booking');
            $table->foreignIdFor(Participant::class);
            $table->foreignIdFor(Room::class);
            $table->foreignIdFor(Training::class);
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->text('keterangan')->nullable();
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
