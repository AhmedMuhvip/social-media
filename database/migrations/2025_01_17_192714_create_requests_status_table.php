<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requests_status', function (Blueprint $table) {
            $table->id('request_id');
            $table->foreignIdFor(User::class, 'sending_id');
            $table->foreignId('received_id')->constrained('users');
            $table->enum('status', ['accepted', 'declined', 'pending']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests_status');
    }
};
