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
        Schema::create('users_x_users_friends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('user_id_friend');
            $table->timestamps();
        });

        Schema::create('users_x_users_blocked', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('user_id_blocked');
            $table->timestamps();
        });

        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('reports');
            $table->timestamps();
        });

        Schema::create('users_x_users_reported', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('user_id_blocked');
            $table->foreignId('id_reports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_x_users_friends');
        Schema::dropIfExists('users_x_users_blocked');
        Schema::dropIfExists('reports');
        Schema::dropIfExists('users_x_users_reported');
    }
};
