<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('friend_language', function (Blueprint $table) {
            $table->id();
            $table->foreignId('friend_id');
            $table->foreignId('language_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('friend_language');
    }
};
